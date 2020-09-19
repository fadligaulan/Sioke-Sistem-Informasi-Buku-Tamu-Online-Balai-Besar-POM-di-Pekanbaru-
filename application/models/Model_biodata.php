<?php
class Model_biodata extends CI_Model
{
    public $tablebiodata = 'biodata';


    public function __construct()
    {
        $this->load->database();
    }

    public function laporan_periode($tanggal1, $tanggal2)
    {
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->where('tanggal >=', $tanggal1);
        $this->db->where('tanggal <=', $tanggal2);
        $this->db->order_by('biodata.id_biodata', 'ASC');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_data_biodata_by_layanan()
    {
        $id_layanan = $this->session->userdata('id_layanan');
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->join('layanan', 'layanan.id_layanan = biodata.id_layanan');
        $this->db->where('biodata.id_layanan', $id_layanan);
        $this->db->order_by("tanggal", "DESC");
        $query = $this->db->get();

        return $query;
    }

    public function get_data_biodata()
    {
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->join('layanan', 'layanan.id_layanan = biodata.id_layanan');
        $this->db->order_by("tanggal", "DESC");
        $query = $this->db->get();

        return $query;
    }

    public function get_biodata_by_id()
    {
        $this->db->select('biodata.id_biodata');
        $this->db->from('biodata');
        $this->db->order_by("id_biodata", "DESC");
        $query = $this->db->get()->row('id_biodata');

        return $query;
    }

    public function get_biodata()
    {
        $query = $this->db->get($this->tablebiodata);

        return $query;
    }

    public function get_biodata_byId($id)
    {
        $query = $this->db->get_where('biodata', array('id_biodata' => $id))->row();

        // Return hasil query
        return $query;
    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablebiodata, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
            ->where('id_biodata', $id)
            ->update($this->tablebiodata, $data);

        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
        $query = $this->db
            ->where('id_biodata', $id)
            ->delete($this->tablebiodata);

        // Return hasil query
        return $query;
    }
    public function cetak()
    {
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->join('layanan', 'layanan.id_layanan = biodata.id_layanan');
        $this->db->order_by('biodata.id_biodata', 'ASC');
        $query = $this->db->get()->result();

        return $query;
    }
    public function cetak_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->join('layanan', 'layanan.id_layanan = biodata.id_layanan');
        $this->db->where('id_biodata', $id);
        $query = $this->db->get();
        $result = $query->row_array();

        return $result;
    }
    public function cetak_permohonan_uji_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->where("id_biodata", $id);
        $query = $this->db->get();
        $result = $query->row_array();

        return $result;
    }
}