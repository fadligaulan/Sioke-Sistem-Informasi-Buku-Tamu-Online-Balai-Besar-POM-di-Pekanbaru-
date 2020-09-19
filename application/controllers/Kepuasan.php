<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepuasan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->cekLogin();
        $this->load->model('Model_kepuasan');
        $this->load->model('Model_biodata');
    }


    public function index()
    {
        $data['pageTitle'] = 'Survei Kepuasan';
        $data['survei'] = $this->Model_kepuasan->get_petugas()->result();
        $data['survei'] = $this->load->view('index_kepuasan', $data);
    }

    public function hasil_survei()
    {
        $data['pageTitle'] = 'Hasil_survei';
        $data['survei1'] = $this->Model_kepuasan->get_jumlah_sangat_puas()->result();
        $data['survei2'] = $this->Model_kepuasan->get_jumlah_puas()->result();
        $data['survei3'] = $this->Model_kepuasan->get_jumlah_cukup_puas()->result();
        $data['survei4'] = $this->Model_kepuasan->get_jumlah_kurang_puas()->result();
        $data['pageContent'] = $this->load->view('hasil_survei', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function survei()
    {
        if ($this->input->post('sangat_puas')) {

            $this->db->trans_start();

            $id_petugas = $this->input->post('id_petugas');
            $this->db->select('jumlah_sangat_puas');
            $this->db->from('sangat_puas');
            $this->db->where('id_petugas', $id_petugas);
            // $this->db->where('Y');
            $this->db->order_by('jumlah_sangat_puas', 'DESC');
            $this->db->limit('1');

            $cekNo = $this->db->get()->row();

            if ($cekNo) {
                $jumlah = $cekNo->jumlah_sangat_puas + 1;
            } else {
                $jumlah = 1;
            }

            $id_biodata = $this->Model_biodata->get_biodata_by_id();
            $id_sangat_puas = $this->input->post('', TRUE);
            $id_petugas = $this->input->post('id_petugas', TRUE);
            $data = array(
                'id_sangat_puas'        => $id_sangat_puas,
                'id_petugas'              => $id_petugas,
                'jumlah_sangat_puas'    => $jumlah,
                'id_biodata'            => $id_biodata

            );


            $this->db->insert('sangat_puas', $data);

            $id_sangat_puas = $this->db->insert_id();

            $data  = array(
                'id_hasil_survei'  => $id_sangat_puas,
                'id_detail_petugas' => $id_petugas
            );
            $this->db->insert('survei', $data);

            $custData = array(
                'status' => 'Sangat Puas'
            );

            $this->db->where('id_biodata', $id_biodata);
            $this->db->update('biodata', $custData);


            $this->db->trans_complete();

            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Trimakasih atas penilaian anda terhadap kami');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data kepuasan gagal ditambahkan');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('kepuasan', 'refresh');
        }

        if ($this->input->post('puas')) {

            $this->db->trans_start();

            $id_petugas = $this->input->post('id_petugas');
            $this->db->select('jumlah_puas');
            $this->db->from('puas');
            $this->db->where('id_petugas', $id_petugas);
            // $this->db->where('Y');
            $this->db->order_by('jumlah_puas', 'DESC');
            $this->db->limit('1');

            $cekNo = $this->db->get()->row();

            if ($cekNo) {
                $jumlah = $cekNo->jumlah_puas + 1;
            } else {
                $jumlah = 1;
            }


            $id_puas = $this->input->post('', TRUE);
            $id_petugas = $this->input->post('id_petugas', TRUE);
            $data = array(
                'id_puas'                => $id_puas,
                'id_petugas'              => $id_petugas,
                'jumlah_puas'            => $jumlah

            );


            $this->db->insert('puas', $data);

            $id_puas = $this->db->insert_id();

            $data  = array(
                'id_hasil_survei'  => $id_puas,
                'id_detail_petugas' => $id_petugas
            );
            $this->db->insert('survei', $data);


            $this->db->trans_complete();

            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Trimakasih atas penilaian anda terhadap kami');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data kepuasan gagal ditambahkan');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('kepuasan', 'refresh');
        }

        if ($this->input->post('cukup_puas')) {

            $this->db->trans_start();

            $id_petugas = $this->input->post('id_petugas');
            $this->db->select('jumlah_cukup_puas');
            $this->db->from('cukup_puas');
            $this->db->where('id_petugas', $id_petugas);
            // $this->db->where('Y');
            $this->db->order_by('jumlah_cukup_puas', 'DESC');
            $this->db->limit('1');

            $cekNo = $this->db->get()->row();

            if ($cekNo) {
                $jumlah = $cekNo->jumlah_cukup_puas + 1;
            } else {
                $jumlah = 1;
            }

            $id_cukup_puas = $this->input->post('', TRUE);
            $id_petugas = $this->input->post('id_petugas', TRUE);
            $data = array(
                'id_cukup_puas'            => $id_cukup_puas,
                'id_petugas'                 => $id_petugas,
                'jumlah_cukup_puas'        => $jumlah

            );

            $this->db->insert('cukup_puas', $data);

            $id_cukup_puas = $this->db->insert_id();

            $data  = array(
                'id_hasil_survei'  => $id_cukup_puas,
                'id_detail_petugas' => $id_petugas
            );
            $this->db->insert('survei', $data);


            $this->db->trans_complete();

            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Trimakasih atas penilaian anda terhadap kami');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data kepuasan gagal ditambahkan');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('kepuasan', 'refresh');
        }

        if ($this->input->post('kurang_puas')) {

            $this->db->trans_start();

            $id_petugas = $this->input->post('id_petugas');
            $this->db->select('jumlah_kurang_puas');
            $this->db->from('kurang_puas');
            $this->db->where('id_petugas', $id_petugas);
            // $this->db->where('Y');
            $this->db->order_by('jumlah_kurang_puas', 'DESC');
            $this->db->limit('1');

            $cekNo = $this->db->get()->row();

            if ($cekNo) {
                $jumlah = $cekNo->jumlah_kurang_puas + 1;
            } else {
                $jumlah = 1;
            }


            $id_kurang_puas = $this->input->post('', TRUE);
            $id_petugas = $this->input->post('id_petugas', TRUE);
            $data = array(
                'id_kurang_puas'        => $id_kurang_puas,
                'id_petugas'              => $id_petugas,
                'jumlah_kurang_puas'    => $jumlah

            );

            $this->db->insert('kurang_puas', $data);

            $id_kurang_puas = $this->db->insert_id();

            $data  = array(
                'id_hasil_survei'  => $id_kurang_puas,
                'id_detail_petugas' => $id_petugas
            );
            $this->db->insert('survei', $data);


            $this->db->trans_complete();

            // cek jika query berhasil
            if ($this->db->trans_status() === true) {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Trimakasih atas penilaian anda terhadap kami');
            } else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data kepuasan gagal ditambahkan');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('kepuasan', 'refresh');
        }
    }
}