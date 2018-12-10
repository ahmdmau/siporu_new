<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukm extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if(!$this->session->userdata('login_ukm')){
                redirect(base_url('user_ukm/user/login'));
        }
	}
	public function index()
	{
		$this->load->view('user_ukm/index');
	}
}
