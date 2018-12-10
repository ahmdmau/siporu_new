<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function get_berita_bydate()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();       
    }

    public function get_berita_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('slug', $slug);
        $query = $this->db->get();
        return $query;       
    }

    // public function get_all_berita($number, $offset)
    // {
    //     return $query = $this->db->get('berita', $number, $offset)->result();        
    // }

    function get_all_berita($limit, $start, $kategori = NULL)
    {
        if ($kategori == "NULL") $kategori = "";
        $sql = "select * from berita where kategori like '%$kategori%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
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

    public function get_kategori_berita()
    {

        $sql = "select kategori from berita GROUP BY kategori";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function count_all($kategori = null)
    {
        if ($kategori == "NULL") $kategori = "";
        $sql = "select * from berita where kategori like '%$kategori%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

}
