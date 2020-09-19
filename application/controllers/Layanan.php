<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->cekLogin();
        $this->load->model('Model_layanan');
    }

    public function index()
    {
        $data['pageTitle'] = 'Layanan';
        // $data['bidang'] = $this->Model_bidang->get_bidang()->result();
        $data['pageContent'] = $this->load->view('layanan', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function pengujian()
    {
        $data['pageTitle'] = 'Layanan';
        $data['layanan'] = $this->Model_layanan->get_layanan()->result();
        $data['pageContent'] = $this->load->view('pilih_layanan_pengujian', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function ujiSampel()
    {
        $data['pageTitle'] = 'Layanan';
        $data['layanan'] = $this->Model_layanan->get_layanan()->result();
        $data['pageContent'] = $this->load->view('biodata_pengujian', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function ambilSampel()
    {
        $data['pageTitle'] = 'Layanan';
        $data['layanan'] = $this->Model_layanan->get_layanan()->result();
        $data['pageContent'] = $this->load->view('ambil_sampel', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function infokom()
    {
        $data['pageTitle'] = 'Layanan';
        $data['layanan'] = $this->Model_layanan->get_layanan()->result();
        $data['pageContent'] = $this->load->view('biodata_infokom', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function konsultasi()
    {
        $data['pageTitle'] = 'Layanan';
        // $data['bidang'] = $this->Model_bidang->get_bidang()->result();
        $data['pageContent'] = $this->load->view('biodata_konsultasi', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function sertifikasi()
    {
        $data['pageTitle'] = 'Layanan';
        // $data['bidang'] = $this->Model_bidang->get_bidang()->result();
        $data['pageContent'] = $this->load->view('biodata_sertifikasi', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function umum()
    {
        $data['pageTitle'] = 'Layanan';
        // $data['bidang'] = $this->Model_bidang->get_bidang()->result();
        $data['pageContent'] = $this->load->view('biodata_umum', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
}