<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indonesia_helper');
        // $this->cekLogin();
        $this->load->model('Model_biodata');
    }


    public function index()
    {
        $data['pageTitle'] = 'Biodata';
        $data['biodata'] = $this->Model_biodata->get_data_biodata_by_layanan()->result();
        $data['admin'] = $this->Model_biodata->get_data_biodata()->result();
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
            redirect('diskusi', 'refresh');
        }

        $data['pageTitle'] = 'Biodata';
        $data['survei'] = $this->Model_biodata->get_biodata()->result();
        $data['pageContent'] = $this->load->view('biodata', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
    public function insert_pengujian()
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
                'NIP'                           => $this->input->post('NIP'),
                'pangkat'                       => $this->input->post('pangkat'),
                'jabatan'                       => $this->input->post('jabatan'),
                'instansi'                      => $this->input->post('instansi'),
                'tgl_surat'                     => $this->input->post('tgl_surat'),
                'sampel'                        => $this->input->post('sampel'),
                'no_surat'                      => $this->input->post('no_surat'),
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
            redirect('diskusi', 'refresh');
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
                'NIP'                       => $this->input->post('NIP'),
                'pangkat'                   => $this->input->post('pangkat'),
                'jabatan'                   => $this->input->post('jabatan'),
                'instansi'                  => $this->input->post('instansi'),
                'tgl_surat'                 => $this->input->post('tgl_surat'),
                'sampel'                    => $this->input->post('sampel'),
                'jenis_kelamin'             => $this->input->post('jenis_kelamin'),
                'umur'                      => $this->input->post('umur'),
                'alamat'                    => $this->input->post('alamat'),
                'no_hp'                     => $this->input->post('no_hp'),
                'pekerjaan'                 => $this->input->post('pekerjaan'),
                'keperluan'                 => $this->input->post('keperluan'),
                'nama_penerima'             => $this->input->post('nama_penerima'),
                'nama_penjawab'             => $this->input->post('nama_penjawab'),
                'jawaban'                   => $this->input->post('jawaban')
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

    public function update_pengujian($id = null)
    {
        if ($this->input->post('submit')) {
            $data = array(
                'no_surat'                 => $this->input->post('no_surat'),
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
        $data['pageContent'] = $this->load->view('update_data_pengujian', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
    public function dataAkhirPengunjung()
    {
        $data['pageTitle'] = 'Biodata';
        $data['biodata'] = $this->Model_biodata->get_data_biodata_by_layanan()->result();
        $data['admin'] = $this->Model_biodata->get_data_biodata()->result();
        $data['pageContent'] = $this->load->view('data_akhir_pengunjung', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
    public function cetak()
    {
        $data['pageTitle'] = 'Cetak Biodata';
        $data['biodata'] = $this->Model_biodata->cetak();


        $this->load->view('template/layout', $data);
        $html = $this->load->view('cetak_biodata', $data, TRUE);


        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4-P',
            'margin_left' => 20,
            'margin_right' => 20,
            'margin_top' => 20,
            'margin_bottom' => 20,
            'margin_header' => 20,
            'margin_footer' => 20,
        ]);
        $mpdf->SetWatermarkText('BUKU TAMU');
        $mpdf->showWatermarkText = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
    public function print_periode()
    {
        if (isset($_POST['submit'])) {
            $tanggal1 =  $this->input->post('tanggal1');
            $tanggal2 =  $this->input->post('tanggal2');
            $data['pageTitle'] = 'Laporan';
            $data['biodata'] =  $this->Model_biodata->laporan_periode($tanggal1, $tanggal2);
            $html = $this->load->view('cetak_biodata', $data, TRUE);


            // Create an instance of the class:
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [252, 420]]);



            // Write some HTML code:
            $mpdf->WriteHTML($html);

            // Output a PDF file directly to the browser
            $mpdf->Output();
        } else {

            $data['pageTitle'] = 'Biodata';
            $data['biodata'] = $this->Model_biodata->get_data_biodata_by_layanan()->result();
            $data['admin'] = $this->Model_biodata->get_data_biodata()->result();
            $data['pageContent'] = $this->load->view('data_akhir_pengunjung', $data, TRUE);
            $this->load->view('template/layout', $data);
        }
    }
    public function cetak_by_id($id)
    {
        $data['pageTitle'] = 'Order Success';
        $data['biodata'] = $this->Model_biodata->cetak_by_id($id);
        $this->load->view('template/layout', $data);
        $html = $this->load->view('cetak_biodata_byid', $data, TRUE);


        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4-P',
            'margin_left' => 20,
            'margin_right' => 20,
            'margin_top' => 20,
            'margin_bottom' => 20,
            'margin_header' => 20,
            'margin_footer' => 20,
        ]);
        $mpdf->SetWatermarkText('BUKU TAMU');
        $mpdf->showWatermarkText = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function cetak_permohonan_uji($id)
    {
        $data['pageTitle'] = 'Order Success';
        $data['biodata'] = $this->Model_biodata->cetak_permohonan_uji_by_id($id);


        $this->load->view('template/layout', $data);
        $html = $this->load->view('permohonan_uji', $data, TRUE);


        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4-P',
            'margin_left' => 20,
            'margin_right' => 20,
            'margin_top' => 20,
            'margin_bottom' => 20,
            'margin_header' => 20,
            'margin_footer' => 20,
        ]);
        $mpdf->showWatermarkText = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('Permohonan Uji.pdf', 'I');
    }
    public function cetak_berita_acara($id)
    {
        $data['pageTitle'] = 'Order Success';
        $data['biodata'] = $this->Model_biodata->cetak_permohonan_uji_by_id($id);


        $this->load->view('template/layout', $data);
        $html = $this->load->view('berita_acara', $data, TRUE);


        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4-P',
            'margin_left' => 20,
            'margin_right' => 20,
            'margin_top' => 20,
            'margin_bottom' => 20,
            'margin_header' => 20,
            'margin_footer' => 20,
        ]);
        $mpdf->showWatermarkText = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('Permohonan Uji.pdf', 'I');
    }
}