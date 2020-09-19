<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskusi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->cekLogin();
    }
    public function index()
    {
        $data['pageTitle'] = 'Dashboard';
        // $data['bidang'] = $this->Model_bidang->get_bidang()->result();
        $data['pageContent'] = $this->load->view('diskusi', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
}