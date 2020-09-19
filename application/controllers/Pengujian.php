<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengujian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->cekLogin();
        $this->load->model('Model_pengujian');
    }


    public function index()
    {
        $data['pageTitle'] = 'pengujian';
        $data['pageContent'] = $this->load->view('data_pengujian', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
    public function insert()
    {
        $biodata = $this->Model_pengujian->get_data_pengujian_by_id();


        if ($this->input->post('submit')) {

            $data = array(
                'id_biodata'                        => $biodata,
                'nama'                              => $this->input->post('nama'),
                'pangkat'                           => $this->input->post('pangkat'),
                'jabatan'                           => $this->input->post('jabatan'),
                'instansi'                          => $this->input->post('instansi'),
                'hp'                                => $this->input->post('hp'),
                'tgl_surat'                         => $this->input->post('tgl_surat'),
                'sampel'                            => $this->input->post('sampel')
            );

            $this->db->insert('pengujian', $data);


            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data anda telah di tambahkan');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data gagal di tambahkan');
            }
            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);
            // refresh page
            redirect('diskusi', 'refresh');
        }
        $data['pageTitle'] = 'pengujian';
        $data['pageContent'] = $this->load->view('data_pengujian', $data, TRUE);
        $this->load->view('template/layout', $data);
    }

    public function update($id = null)
    {
        if ($this->input->post('submit')) {
            $data = array(
                'id_layanan'                => $this->input->post('id_layanan'),
                'nama'                      => $this->input->post('nama'),
                'jenis_kelamin'             => $this->input->post('jenis_kelamin'),
                'umur'                      => $this->input->post('umur'),
                'alamat'                    => $this->input->post('alamat'),
                'no_hp'                     => $this->input->post('no_hp'),
                'pekerjaan'                 => $this->input->post('pekerjaan'),
                'keperluan'                 => $this->input->post('keperluan'),
                'tanggal'                   => date('Y-m-d'),
                'jam'                       => date('H:i:s'),
                'foto'                      => $this->input->post('foto'),
                'nama_penerima'             => $this->input->post('nama_penerima'),
                'nama_penjawab'             => $this->input->post('nama_penjawab')
            );
            // Jalankan function update pada model
            $id = $this->input->post('id');
            $query = $this->Model_pengujian->update($id, $data);
            // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Data pengujian telah di perbaharui');
            else $message = array('status' => true, 'message' => 'Data pengujian gagal di perbaharui');
            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);
            // refresh page
            redirect('pengujian/dataAkhirPengunjung');
        }
        // Ambil data user dari database
        $pengujian = $this->Model_pengujian->get_pengujian_byId($id);
        // print_r($pengujian);
        // die;
        // Jika data user tidak ada maka show 404
        if (!$pengujian) show_404();;
        $data['pageTitle'] = 'Update pengujian';
        $data['pengujian'] = $pengujian;
        $data['pageContent'] = $this->load->view('update_data_pengunjung', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
    public function dataAkhirPengunjung()
    {
        $data['pageTitle'] = 'pengujian';
        $data['pengujian'] = $this->Model_pengujian->get_data_pengujian()->result();
        $data['pageContent'] = $this->load->view('data_akhir_pengunjung', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
}