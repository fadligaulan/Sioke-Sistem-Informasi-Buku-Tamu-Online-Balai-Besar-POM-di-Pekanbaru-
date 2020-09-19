<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_petugas');
        $this->load->model('Model_layanan');
    }


    //FUNCTION YANG PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {
        $data['pageTitle'] = 'Data Petugas';
        $data['petugas'] = $this->Model_petugas->get_data_petugas()->result();
        $data['pageContent'] = $this->load->view('data_petugas', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    //FUNCTION TAMBAH DATA KABUPATEN
    public function insert()
    {
        if ($this->input->post('submit')) {

            $data = array(
                'id_petugas'                   => $this->input->post(''),
                'nama_petugas'                 => $this->input->post('nama_petugas'),
                'id_layanan'                   => $this->input->post('id_layanan')

            );

            $query = $this->Model_petugas->insert($data);

            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data petugas telah ditambahkan');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data petugas gagal ditambahkan');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('petugas', 'refresh');
        }

        $data['pageTitle'] = 'DATA petugas';
        $data['petugas'] = $this->Model_petugas->get_petugas()->result();
        $data['layanan'] = $this->Model_layanan->get_layanan()->result();
        $data['pageContent'] = $this->load->view('tambah_petugas', $data, TRUE);

        $this->load->view('template/layout', $data);
    }


    //FUNCTION UPDATE DATA KABUPATEN
    public function update($id = null)
    {
        if ($this->input->post('submit')) {


            $data = array(
                'nama_petugas'                 => $this->input->post('nama_petugas'),
                'id_layanan'                   => $this->input->post('id_layanan')

            );

            // Jalankan function update pada model
            $id = $this->input->post('id');
            $query = $this->Model_petugas->update($id, $data);



            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data petugas telah diupdate');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data petugas gagal diupdate');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('petugas');
        }
        // Ambil data petugas dari database
        $petugas = $this->Model_petugas->get_petugas_byId($id);

        // print_r($petugas);
        // die;

        // Jika data petugas tidak ada maka show 404
        if (!$petugas) show_404();

        $data['pageTitle'] = 'Update petugas';
        $data['petugas'] = $petugas;
        $data['layanan'] = $this->Model_layanan->get_layanan()->result();
        $data['pageContent'] = $this->load->view('update_data_petugas', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    //FUNCTION DELETE DATA KABUPATEN
    public function delete($id = null)
    {
        $petugas = $this->Model_petugas->get_petugas_byId($id);

        if (!$petugas) show_404();

        $query = $this->Model_petugas->delete($id);

        // cek jika query berhasil
        if ($this->db->trans_status() === true) {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data petugas telah dihapus');
        } else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data petugas gagal dihapus');
        }

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('petugas', 'refresh');
    }
}