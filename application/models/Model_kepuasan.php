<?php
class Model_kepuasan extends CI_Model {
    public $sangatpuas = 'sangat_puas';
    public $puas = 'puas';
    public $cukuppuas = 'cukup_puas';
    public $kurangpuas = 'kurang_puas';
    public $petugas = 'petugas';
    

    public function __construct()
    {
        $this->load->database();

    }

    
    public function get_petugas()
    {
        $this->db->select('*');
        $this->db->from('petugas');        
        $query = $this->db->get();

        return $query;
    }

    public function get_jumlah_sangat_puas()
    {
        // $id_group = $this->session->userdata('id_group');
        $this->db->select('nama_petugas,MAX(jumlah_sangat_puas) as jumlah_sangat_puas');
        $this->db->from('sangat_puas');
        $this->db->join('petugas', 'petugas.id_petugas = sangat_puas.id_petugas');
        $this->db->group_by('sangat_puas.id_petugas');
        $query = $this->db->get();


        return $query;
    }

    public function get_jumlah_puas()
    {
        // $id_group = $this->session->userdata('id_group');
        $this->db->select('nama_petugas,MAX(jumlah_puas) as jumlah_puas');
        $this->db->from('puas');
        $this->db->join('petugas', 'petugas.id_petugas = puas.id_petugas');
        $this->db->group_by('puas.id_petugas');
        $query = $this->db->get();


        return $query;
    }

    public function get_jumlah_cukup_puas()
    {
        // $id_group = $this->session->userdata('id_group');
        $this->db->select('nama_petugas,MAX(jumlah_cukup_puas) as jumlah_cukup_puas');
        $this->db->from('cukup_puas');
        $this->db->join('petugas', 'petugas.id_petugas = cukup_puas.id_petugas');
        $this->db->group_by('cukup_puas.id_petugas');
        $query = $this->db->get();


        return $query;
    }

    public function get_jumlah_kurang_puas()
    {
        // $id_group = $this->session->userdata('id_group');
        $this->db->select('nama_petugas,MAX(jumlah_kurang_puas) as jumlah_kurang_puas');
        $this->db->from('kurang_puas');
        $this->db->join('petugas', 'petugas.id_petugas = kurang_puas.id_petugas');
        $this->db->group_by('kurang_puas.id_petugas');
        $query = $this->db->get();


        return $query;
    }



    public function get_kepuasan_byId($id)
    {
        $query = $this->db->get_where('kepuasan', array('id_kepuasan' => $id))->row();

        // Return hasil query
        return $query;

    }



    public function sangatpuas($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->sangatpuas, $data);

        // Return hasil query
        return $query;
    }

    public function puas($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->puas, $data);

        // Return hasil query
        return $query;
    }


    public function cukuppuas($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->cukuppuas, $data);

        // Return hasil query
        return $query;
    }

    public function kurangpuas($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->kurangpuas, $data);

        // Return hasil query
        return $query;
    }




    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_kepuasan', $id)
        ->update($this->tablekepuasan, $data);
        
        // Return hasil query
        return $query;
    }


    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_kepuasan', $id)
      ->delete($this->tablekepuasan);
      
      // Return hasil query
      return $query;
  } 
}
