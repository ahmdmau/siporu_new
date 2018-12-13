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

    public function get_ukm_by_kategori($kategori, $limit, $start)
    {
        if($kategori == 'pertanian') {
            $id_kategori = 1;
        } elseif ($kategori == 'perikanan') {
            $id_kategori = 2;            
        } elseif ($kategori == 'peternakan') {
            $id_kategori = 3;            
        } elseif ($kategori == 'perkebunan') {
            $id_kategori = 4;            
        } 
        // $this->db->select('*');
        // $this->db->from('ukm');
        // $this->db->where('id_kategori', $id_kategori);
        // $this->db->limit('id_kategori', $id_kategori);
        // $query = $this->db->get();
        $sql = "select * from ukm where id_kategori = '$id_kategori' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query;     
    }

    function get_ukm_count_by_kategori($kategori)
    {
        if($kategori == 'pertanian') {
            $id_kategori = 1;
        } elseif ($kategori == 'perikanan') {
            $id_kategori = 2;            
        } elseif ($kategori == 'peternakan') {
            $id_kategori = 3;            
        } elseif ($kategori == 'perkebunan') {
            $id_kategori = 4;            
        } 

        $sql = "select * from ukm where id_kategori = '$id_kategori' ";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}