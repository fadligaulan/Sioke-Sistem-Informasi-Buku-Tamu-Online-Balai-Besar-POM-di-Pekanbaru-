<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_user');
        $this->load->model('Model_layanan');
    }


    //FUNCTION YANG PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {   
        $data['pageTitle'] = 'DATA USER';      
        $data['user'] = $this->Model_user->get_user()->result();
        $data['pageContent'] = $this->load->view('data_user', $data, TRUE);

        $this->load->view('template/layout', $data);

    }

    //FUNCTION TAMBAH DATA KABUPATEN
    public function insert() 
    {
         if ($this->input->post('submit')) {

          $data = array(
            'id_user'                   => $this->input->post(''),
            'nama_user'                 => $this->input->post('nama_user'),                                              
            'username'                  => $this->input->post('username'),
            'password'                  => $this->input->post('password'),
            'aktif'                     => $this->input->post('aktif'),
            'level'                     => $this->input->post('level')

          );

          $query = $this->Model_user->insert($data);

                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data user telah ditambahkan');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data user gagal ditambahkan');
          }

                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                // refresh page
          redirect('user', 'refresh');

          }

          $data['pageTitle'] = 'DATA USER';      
          $data['user'] = $this->Model_user->get_user()->result();
          $data['layanan'] = $this->Model_layanan->get_layanan()->result();
          $data['pageContent'] = $this->load->view('tambah_user', $data, TRUE);

          $this->load->view('template/layout', $data);
      }


    //FUNCTION UPDATE DATA KABUPATEN
    public function update($id = null)
    {
        if ($this->input->post('submit')) {

          $data = array(
            'nama_user'                 => $this->input->post('nama_user'),                                              
            'username'                  => $this->input->post('username'),
            'password'                  => $this->input->post('password'),
            'aktif'                     => $this->input->post('aktif'),
            'level'                     => $this->input->post('level')

          );

                // Jalankan function update pada model
          $id = $this->input->post('id');
          $query = $this->Model_user->update($id, $data);



                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data user telah diupdate');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data user gagal diupdate');
          }

                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                // refresh page
          redirect('user');
        }
         // Ambil data user dari database
        $user = $this->Model_user->get_user_byId($id);

        // print_r($user);
        // die;

        // Jika data user tidak ada maka show 404
        if (!$user) show_404();;

        $data['pageTitle'] = 'Update user';      
        $data['user'] = $user;
        $data['layanan'] = $this->Model_layanan->get_layanan()->result();
        $data['pageContent'] = $this->load->view('update_data_user', $data, TRUE);

        $this->load->view('template/layout', $data);

    }

    //FUNCTION DELETE DATA KABUPATEN
    public function delete($id = null)
    {
        $user = $this->Model_user->get_user_byId($id);

        if (!$user) show_404();

        $query = $this->Model_user->delete($id);

          // cek jika query berhasil
        if ($this->db->trans_status() === true)  {
          $this->db->trans_commit();
          $message = array('status' => true, 'message' => 'Data user telah dihapus');
        }
        else {
          $this->db->trans_rollback();
          $message = array('status' => true, 'message' => 'Data user gagal dihapus');
        }

          // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('user', 'refresh');

    }

}