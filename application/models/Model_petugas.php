<?php
class Model_petugas extends CI_Model {
    public $tablepetugas = 'petugas';


    public function __construct()
    {
        $this->load->database();

    }

    public function get_data_petugas()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->join('layanan', 'layanan.id_layanan = petugas.id_layanan');
        $query = $this->db->get();

        return $query;
        
    }

    public function get_petugas_by_layanan(){
        $id_layanan = $this->session->userdata('id_layanan');

        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->join('layanan', 'layanan.id_layanan = petugas.id_layanan');
        $this->db->where('petugas.id_layanan', $id_layanan);
        $this->db->order_by('jam', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    
    public function get_data_petugas_by_id($id_petugas)
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->join('masjid', 'petugas.id_masjid = masjid.id_masjid');
        $this->db->where('id_petugas', $id_petugas);
        return $this->db->get()->result();
    }


    public function get_petugas()
    {
        $query = $this->db->get($this->tablepetugas);

        return $query;
    }

    public function getByID()
    {
        $id_takmir = $this->session->userdata('id_takmir');
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->join('masjid', 'petugas.id_masjid = masjid.id_masjid');
        $this->db->join('takmir', 'masjid.id_masjid = takmir.id_masjid');
        $this->db->where('id_takmir', $id_takmir);
        $query = $this->db->get();

        return $query;
    }

    public function get_petugas_byId($id)
    {
        $query = $this->db
        ->join('layanan', 'layanan.id_layanan = petugas.id_layanan')
        ->get_where('petugas', array('id_petugas' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablepetugas, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_petugas', $id)
        ->update($this->tablepetugas, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_petugas', $id)
      ->delete($this->tablepetugas);
      
      // Return hasil query
      return $query;
  }




}

