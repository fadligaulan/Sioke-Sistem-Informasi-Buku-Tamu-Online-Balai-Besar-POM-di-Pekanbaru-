<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_petugas extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('Model_dashboard');
    }
    public function index()
    {
        $data['pageTitle'] = 'DASHBOARD';
        $data['sangat_puas'] = $this->Model_dashboard->count_sangat_puas();
        $data['puas'] = $this->Model_dashboard->count_puas();
        $data['cukup_puas'] = $this->Model_dashboard->count_cukup_puas();
        $data['kurang_puas'] = $this->Model_dashboard->count_kurang_puas();
        $data['pageContent'] = $this->load->view('dashboard_petugas', $data, TRUE);
        $chart['sangat_puas'] = $this->Model_dashboard->count_sangat_puas();;
        $chart['puas'] = $this->Model_dashboard->count_puas();
        $chart['cukup_puas'] = $this->Model_dashboard->count_cukup_puas();
        $chart['kurang_puas'] = $this->Model_dashboard->count_kurang_puas();
        $data['donutChart'] = $chart;
        $this->load->view('template/layout', $data);
    }
}