<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exportdata extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Model_biodata');
	}

	public function index()
	{
		$data['pageTitle'] = 'Biodata';      
		$data['biodata'] = $this->Model_biodata->get_data_biodata()->result();
		$data['pageContent'] = $this->load->view('data_akhir_pengunjung', $data, TRUE);
		$this->load->view('template/layout', $data);

	}
	
	public function export(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		// Panggil class PHPExcel nya
		$excel = new PHPExcel();

		// Settingan awal fil excel
		$excel->getProperties()->setCreator('My Notes Code')
			->setLastModifiedBy('My Notes Code')
			->setTitle("Data pengunjung")
			->setSubject("pengunjung")
			->setDescription("Laporan Semua Data pengunjung")
			->setKeywords("Data pengunjung");

		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
			'font' => array('bold' => true), // Set font nya jadi bold
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row = array(
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PENGUNJUNG"); // Set kolom A1 dengan tulisan "DATA Exportdata"
		$excel->getActiveSheet()->mergeCells('A1:M1'); // Set Merge Cell pada kolom A1 sampai E1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "No"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "Nama"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "Jenis kelamin"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "Umur"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "Alamat");
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "No HP"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "Pekerjaan");
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "Keperluan");
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "Jam");
		$excel->setActiveSheetIndex(0)->setCellValue('J3', "Tanggal");
		$excel->setActiveSheetIndex(0)->setCellValue('K3', "Foto");
		$excel->setActiveSheetIndex(0)->setCellValue('L3', "Nama penerima");
		$excel->setActiveSheetIndex(0)->setCellValue('M3', "Nama penjawab");

		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);


		// Panggil function view yang ada di Model_export_data untuk menampilkan semua data Exportdatanya
		$biodata = $this->Model_biodata->get_data_biodata()->result();;

		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
		foreach($biodata as $data){ // Lakukan looping pada variabel Exportdata
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->jenis_kelamin);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->umur);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->alamat);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->no_hp);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->pekerjaan);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->keperluan);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->jam);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->tanggal);
			if(file_exists('assets/images/foto/'.$data->foto))
			{
				$objDrawing = new PHPExcel_Worksheet_Drawing();
				$objDrawing->setPath('assets/images/foto/'.$data->foto);
				$objDrawing->setHeight(50);
				$objDrawing->setCoordinates('K'.$numrow);
				$objDrawing->setWorksheet($excel->getActiveSheet());
				$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(50);
			}
			// $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->foto);
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->nama_penerima);
			$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->nama_penjawab);
			
			// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
			$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
			
			$no++; // Tambah 1 setiap kali looping
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Set width kolom
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(15); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); // Set width kolom F
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom G
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom H
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(15); // Set width kolom I
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(15); // Set width kolom J
		$excel->getActiveSheet()->getColumnDimension('K')->setWidth(15); // Set width kolom K
		$excel->getActiveSheet()->getColumnDimension('L')->setWidth(15); // Set width kolom L
		$excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); // Set width kolom M
		
		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

		// Set orientasi kertas jadi LANDSCAPE
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		// Set judul file excel nya
		$excel->getActiveSheet(0)->setTitle("Laporan Data Pengunjung");
		$excel->setActiveSheetIndex(0);

		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Data Pengunjung.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}
}