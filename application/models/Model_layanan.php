<?php
class Model_layanan extends CI_Model {
    public $tablelayanan = 'layanan';


    public function __construct()
    {
        $this->load->database();

    }

    public function get_data_layanan()
    {
        $this->db->select('*');
        $this->db->from('layanan');
        $this->db->join('masjid', 'layanan.id_masjid = masjid.id_masjid');
        $this->db->order_by("tgl_layanan", "DESC");
        $query = $this->db->get();

        return $query;
        
    }
    
    public function get_data_layanan_by_id($id_layanan)
    {
        $this->db->select('*');
        $this->db->from('layanan');
        $this->db->join('masjid', 'layanan.id_masjid = masjid.id_masjid');
        $this->db->where('id_layanan', $id_layanan);
        return $this->db->get()->result();
    }


    public function get_layanan()
    {
        $query = $this->db->get($this->tablelayanan);

        return $query;
    }

    public function getByID()
    {
        $id_takmir = $this->session->userdata('id_takmir');
        $this->db->select('*');
        $this->db->from('layanan');
        $this->db->join('masjid', 'layanan.id_masjid = masjid.id_masjid');
        $this->db->join('takmir', 'masjid.id_masjid = takmir.id_masjid');
        $this->db->where('id_takmir', $id_takmir);
        $query = $this->db->get();

        return $query;
    }

    public function get_layanan_byId($id)
    {
        $query = $this->db->get_where('layanan', array('id_layanan' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablelayanan, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_layanan', $id)
        ->update($this->tablelayanan, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_layanan', $id)
      ->delete($this->tablelayanan);
      
      // Return hasil query
      return $query;
  }




}

