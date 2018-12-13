<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukm extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Userukm_model', 'userukm_model');
		if(!$this->session->userdata('login_ukm')){
                redirect(base_url('user_ukm/user/login'));
        }
	}
	public function index()
	{
		$id = $this->session->userdata['login_ukm']['id_ukm'];
		$data['hitung_produk'] = $this->userukm_model->hitung_produk_ukm($id)->result();
		$data['hitung_pesanan'] = $this->userukm_model->hitung_pesanan($id)->result();
		$this->load->view('user_ukm/index', $data);
	}
}
