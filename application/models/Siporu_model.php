<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siporu_model extends CI_Model {
    
    public function get_ukm_bydate($number, $offset)
    {
    	return $query = $this->db->get('ukm', $number, $offset)->result();
    }

    public function get_ukm_home()
    {
        // return $query = $this->db->get('ukm', $number, $offset)->result();
        $query = $this->db->select('*')
                          ->from('ukm')
                          ->limit(4)
                          ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    
    public function get_berita_home()
    {
        $query = $this->db->select('*')
                          ->from('berita')
                          ->limit(3)
                          ->get();
        if ($query->num_rows() > 0) {
        return $query->result();
        }
    }

    public function get_berita_bydate($number, $offset)
    {
        return $query = $this->db->get('berita', $number, $offset)->result();
    }

    public function get_berita_by_slug($slug)
    {
        return $query = $this->db->get('berita', array('slug' => $slug) )->result();        
    }

    public function get_all_berita($number, $offset)
    {
        return $query = $this->db->get('berita', $number, $offset)->result();        
    }

    public function get_hitung_ukm()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM ukm");
		return $query;
    }


    public function get_hitung_produk()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM produk");
		return $query;
    }

    public function get_results($search_term, $limit, $start)
    {
        // $sql = "select * from ukm where 'nama_ukm' like $search_term limit " . $start . ", " . $limit;
        $sql = "select * from ukm where nama_ukm like '%$search_term%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function get_ukm_count($search_term)
    {
        // if ($st == "NIL") $st = "";
        $sql = "select * from ukm where nama_ukm like '%$search_term%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
