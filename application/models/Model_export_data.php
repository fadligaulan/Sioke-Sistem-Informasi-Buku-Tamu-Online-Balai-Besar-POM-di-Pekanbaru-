<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_export_data extends CI_Model {
	public function biodata(){
		return $this->db->get('biodata')->result(); // Tampilkan semua data yang ada di tabel siswa
	}
}
