<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_model extends CI_Model {
    public function getKontak()
    {
        $hasil = $this->db->get('tentang');
        return $hasil->result();
    }
}