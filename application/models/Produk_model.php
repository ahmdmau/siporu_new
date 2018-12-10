<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model{
    
    public function get_produk_by_slug($slug)
    {
        $this->db->select('*')
                 ->from('produk')
                 ->where('slug', $slug);
        $query = $this->db->get();
        return $query->result();
    }

    public function find($id_produk)
    {
        $hasil = $this->db->where('id_produk', $id_produk)
                         ->limit(1)
                         ->get('produk');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }
}
