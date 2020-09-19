<?php
class Model_hasil_survei extends CI_Model {
    public $sangatpuas = 'sangat_puas';
    public $puas = 'puas';
    public $cukuppuas = 'cukup_puas';
    public $kurangpuas = 'kurang_puas';
    public $petugas = 'petugas';
    

    public function __construct()
    {
        $this->load->database();

    }

    
    public function get_hasil_survei()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->join('sangat_puas', 'petugas.id_petugas = sangat_puas.id_petugas');
        $this->db->join('puas', 'petugas.id_petugas = puas.id_petugas');
        $this->db->join('cukup_puas', 'petugas.id_petugas = cukup_puas.id_petugas');
        $this->db->join('kurang_puas', 'petugas.id_petugas = kurang_puas.id_petugas');        
        $query = $this->db->get();

        return $query;
    }



    public function get_hasil_survei_byId($id)
    {
        $query = $this->db->get_where('hasil_survei', array('id_hasil_survei' => $id))->row();

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
        ->where('id_hasil_survei', $id)
        ->update($this->tablehasil_survei, $data);
        
        // Return hasil query
        return $query;
    }


    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_hasil_survei', $id)
      ->delete($this->tablehasil_survei);
      
      // Return hasil query
      return $query;
    } 
}
