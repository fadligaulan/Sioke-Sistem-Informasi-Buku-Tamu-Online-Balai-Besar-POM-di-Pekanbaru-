<?php
class Model_pengujian extends CI_Model
{
    public $tablepengujian = 'pengujian';


    public function __construct()
    {
        $this->load->database();
    }

    public function get_data_pengujian_by_id()
    {
        $id_layanan = 1;
        $this->db->select('biodata.id_biodata');
        $this->db->from('biodata');
        $this->db->join('layanan', 'layanan.id_layanan = biodata.id_layanan');
        $this->db->where('layanan.id_layanan', $id_layanan);
        $this->db->order_by("tanggal", "DESC");
        $query = $this->db->get()->row('id_biodata');

        return $query;
    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablepengujian, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
            ->where('id_pengujian', $id)
            ->update($this->tablepengujian, $data);

        // Return hasil query
        return $query;
    }

    public function delete($id)
    {
        // Jalankan query
        $query = $this->db
            ->where('id_pengujian', $id)
            ->delete($this->tablepengujian);

        // Return hasil query
        return $query;
    }
}