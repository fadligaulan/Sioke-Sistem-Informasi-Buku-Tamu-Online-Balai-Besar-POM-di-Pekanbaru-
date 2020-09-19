<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata_pengujian extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_biodata');
    }


    public function index()
    {
        $data['pageTitle'] = 'Biodata';
        $data['biodata'] = $this->Model_biodata->get_data_biodata()->result();
        $data['pageContent'] = $this->load->view('data_pengunjung', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
    public function insert()
    {
        if ($this->input->post('submit')) {
            $img = $_POST['foto'];
            $folderPath = "assets/images/foto/";

            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];

            $image_base64 = base64_decode($image_parts[1]);
            $fileName = uniqid() . '.png';

            $file = $folderPath . $fileName;
            file_put_contents($file, $image_base64);

            $data = array(
                'id_biodata'                    => $this->input->post(''),
                'id_layanan'                    => $this->input->post('id_layanan'),
                'nama'                          => $this->input->post('nama'),
                'jenis_kelamin'                 => $this->input->post('jenis_kelamin'),
                'umur'                          => $this->input->post('umur'),
                'alamat'                        => $this->input->post('alamat'),
                'no_hp'                         => $this->input->post('no_hp'),
                'pekerjaan'                     => $this->input->post('pekerjaan'),
                'keperluan'                     => $this->input->post('keperluan'),
                'tanggal'                       => date('Y-m-d H:i:s'),
                'jam'                           => date('H:i:s'),
                'foto'                          => $fileName
            );



            $query = $this->Model_biodata->insert($data);

            // print_r($data); die;

            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Biodata telah ditambahkan');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Biodata gagal ditambahkan');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('dashboard', 'refresh');
        }

        $data['pageTitle'] = 'Biodata';
        $data['survei'] = $this->Model_biodata->get_biodata()->result();
        $data['pageContent'] = $this->load->view('biodata_pengujian', $data, TRUE);
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
                'tanggal'                   => date('Y-m-d H:i:s'),
                'jam'                       => date('H:i:s'),
                'foto'                      => $this->input->post('foto'),
                'nama_penerima'             => $this->input->post('nama_penerima'),
                'nama_penjawab'             => $this->input->post('nama_penjawab')
            );

            // Jalankan function update pada model
            $id = $this->input->post('id');
            $query = $this->Model_biodata->update($id, $data);



            // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Data biodata telah di perbaharui');
            else $message = array('status' => true, 'message' => 'Data biodata gagal di perbaharui');

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('biodata/dataAkhirPengunjung');
        }


        // Ambil data user dari database
        $biodata = $this->Model_biodata->get_biodata_byId($id);

        // print_r($biodata);
        // die;

        // Jika data user tidak ada maka show 404
        if (!$biodata) show_404();;

        $data['pageTitle'] = 'Update biodata';
        $data['biodata'] = $biodata;
        $data['pageContent'] = $this->load->view('update_data_pengunjung', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function dataAkhirPengunjung()
    {
        $data['pageTitle'] = 'Biodata';
        $data['biodata'] = $this->Model_biodata->get_data_biodata()->result();
        $data['pageContent'] = $this->load->view('data_akhir_pengunjung', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
}