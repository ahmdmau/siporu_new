<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
		$this->load->model('order_model');
    }

    public function index()
    {
		$id = $this->session->userdata['logged_in']['id_pembeli'];
        $is_prosessed = $this->order_model->process($id);
        if ($is_prosessed) {
            $this->cart->destroy();
            redirect('order/success');
        } else {
            $this->session->set_flashdata('error_checkout', 'Gagal proses order anda, silahkan coba kembali!');
            redirect('user/keranjang');
        }
    }
}