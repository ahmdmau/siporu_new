<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login_ukm')){
                redirect('ukm/user/login');
        }

        $this->load->model('order_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $id = $this->session->userdata['login_ukm']['id_ukm'];
        $data["invoices"] = $this->order_model->all($id);
        $this->load->view('user_ukm/pesanan', $data);
    }

    public function detail($invoices_id)
    {
        $data['invoices'] = $this->order_model->get_invoice_by_id($invoices_id);
        $data['order'] = $this->order_model->get_order_by_invoice($invoices_id);
        $this->load->view('user_ukm/detail_pesanan', $data);
    }

    public function konfirmasi_pesanan($id_invoices)
    {
        

        $isValid = $this->order_model->konfirmasi_pesanan($id_invoices);
        if ($isValid) {
            $this->session->set_flashdata('message', 'Terima kasih.. Silahkan lakukan pengiriman barang!');
            redirect('user_ukm/invoices');
        } else{
            $this->session->set_flashdata('error', 'Error');
            redirect('user/konfirmasi_pesanan/' . set_value('id_invoices'));
        }
    }

}