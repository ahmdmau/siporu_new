<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukm_model extends CI_Model{
    public function get_all_ukm()
    {
        $this->db->select('*');
        $this->db->from('ukm');
        $this->db->order_by('date_created','desc');
        $this->db->limit(6);
        $query = $this->db->get();
        return $query;        
    }

    function getukm($limit, $start)
    {
        $sql = "select * from ukm limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }


    public function get_ukm_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('ukm');
        $this->db->where('slug', $slug);
        $query = $this->db->get();
        return $query;       
    }

    public function get_data_ukm($slug)
    {
        $this->db->select('*')
                 ->from('ukm')
                 ->where('slug', $slug);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_produk_ukm($id_ukm)
    {
        $query = $this->db->select('p.id_produk, p.id_ukm, p.id_kategori, p.nama_produk, p.nama_produk, p.gambar, harga, stok, p.deskripsi, p.slug')
                  ->from('produk p')
                  ->join('ukm u', 'u.id_ukm = p.id_ukm')
                  ->where('u.id_ukm', $id_ukm)
                  ->get();
        return $query->result();
    }

    function get_ukm_count($search_term, $kota)
    {
        // if ($st == "NIL") $st = "";
        $sql = "select * from ukm where nama_ukm like '%$search_term%' and kota like '%$kota%' ";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function get_results($search_term, $kota, $limit, $start)
    {
        // $sql = "select * from ukm where 'nama_ukm' like $search_term limit " . $start . ", " . $limit;
        $sql = "select * from ukm where nama_ukm like '%$search_term%' and kota like '%$kota%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
}