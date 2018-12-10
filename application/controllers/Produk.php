<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('produk_model');
		$this->load->library('pagination');
    }
    
    public function detail_produk($slug)
    {
        $data['produk'] = $this->produk_model->get_produk_by_slug($slug);
        $this->load->view('produk', $data);
    }
    
}
