<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('tentang_model');
    }
    
	public function index()
	{
		$data['kontak'] = $this->tentang_model->getKontak();
		$this->load->view('kontak', $data);
	}
}