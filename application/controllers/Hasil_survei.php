<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_survei extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_hasil_survei');
    }

    public function index()
    {
        $data['pageTitle'] = 'Hasil_survei';
        $data['survei'] = $this->Model_hasil_survei->get_hasil_survei()->result();
        $data['pageContent'] = $this->load->view('hasil_survei', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
}