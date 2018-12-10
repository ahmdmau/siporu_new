<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukm extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('ukm_model');
		$this->load->library('pagination');
    }

    public function index()
    {
        //pagination settings
        $config = array();
        $config['base_url']= site_url('ukm/index');
        $config['total_rows'] = $this->db->count_all('ukm');
        $config['per_page'] = "4";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="icon-material-outline-keyboard-arrow-left"></i>';
        $config['prev_tag_open'] = '<li class="pagination-arrow">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<i class="icon-material-outline-keyboard-arrow-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="current-page ripple-effect">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['ukm'] = $this->ukm_model->getukm($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        // $data['ukm'] = $this->ukm_model->get_all_ukm()->result();
        $this->load->view('ukm', $data);
    }

    public function detail_ukm($slug)
    {
        $data['detail'] = $this->ukm_model->get_ukm_by_slug($slug)->result();
        // $data['produk'] = $this->ukm_model->get_produk_ukm($slug);
        $result = $this->ukm_model->get_data_ukm($slug);
        if ($result != FALSE) {
            $id_ukm = $result[0]->id_ukm;
        }

        $data['produk'] = $this->ukm_model->get_produk_ukm($id_ukm);
        $this->load->view('detail-ukm', $data);
    }

    public function cari()
	{
		
			$search_term = $this->input->post('nama_ukm');
			$kota = $this->input->post('kota');

			//pagination settings
			$config = array();
			$config['base_url']= site_url('ukm/cari');
			$config['total_rows'] = $this->ukm_model->get_ukm_count($search_term, $kota);
			$config['per_page'] = "4";
			$config["uri_segment"] = 3;
			$choice = $config["total_rows"]/$config["per_page"];
			$config["num_links"] = floor($choice);
	
			// integrate bootstrap pagination
			$config['full_tag_open'] = '<ul>';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '<i class="icon-material-outline-keyboard-arrow-left"></i>';
			$config['prev_tag_open'] = '<li class="pagination-arrow">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '<i class="icon-material-outline-keyboard-arrow-right"></i>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#" class="current-page ripple-effect">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
	
			$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			$data['results'] = $this->ukm_model->get_results($search_term, $kota, $config["per_page"], $data['page']);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('hasil_cari',$data);

        
	}
}