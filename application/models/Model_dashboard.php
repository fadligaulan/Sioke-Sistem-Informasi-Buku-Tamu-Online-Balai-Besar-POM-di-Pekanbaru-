 <?php
class Model_dashboard extends CI_Model {
    

    public function __construct()
    {
        $this->load->database();

    }

    public function count_sangat_puas()
    {
        $this->db->from('sangat_puas');

        $query = $this->db->count_all_results();
        return $query;
    }

    public function count_puas()
    {
        $this->db->from('puas');

        $query = $this->db->count_all_results();
        return $query;
    }

    public function count_cukup_puas()
    {
        $this->db->from('cukup_puas');

        $query = $this->db->count_all_results();
        return $query;
    }

     public function count_kurang_puas()
    {
        $this->db->from('kurang_puas');

        $query = $this->db->count_all_results();
        return $query;
    }

    
   
}


 