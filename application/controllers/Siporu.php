<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siporu extends CI_Controller {
    
	public function __construct()
    {
        parent::__construct();
		$this->load->model('siporu_model');
		$this->load->model('berita_model');
		$this->load->library('pagination');
    }
    
	public function index()
	{
		// Konfigurasi untuk pagination
		$config['base_url'] = base_url();
		$config['total_rows'] = $this->db->count_all('ukm');
		$config['per_page'] = 6;
		$config['uri_segment'] = 0;
		$this->pagination->initialize($config);

		$data['ukm'] = $this->siporu_model->get_ukm_home();
		$data['berita'] = $this->berita_model->get_berita_home();
		$data['hitungUkm'] = $this->siporu_model->get_hitung_ukm()->result();
		$data['hitungPertanian'] = $this->siporu_model->get_hitung_pertanian()->result();
		$data['hitungPerikanan'] = $this->siporu_model->get_hitung_perikanan()->result();
		$data['hitungPeternakan'] = $this->siporu_model->get_hitung_peternakan()->result();
		$data['hitungPerkebunan'] = $this->siporu_model->get_hitung_perkebunan()->result();
		$data['hitungProduk'] = $this->siporu_model->get_hitung_produk()->result();
		$this->load->view('index', $data);
	
	}

	public function cari()
	{
		if(!$this->input->post('cari')){
			$this->session->set_flashdata('error_cari', 'Masukkan keyword!');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$search_term = $this->input->post('cari');

			//pagination settings
			$config = array();
			$config['base_url']= site_url('siporu/cari');
			$config['total_rows'] = $this->siporu_model->get_ukm_count($search_term);
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

			$data['results'] = $this->siporu_model->get_results($search_term, $config["per_page"], $data['page']);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('hasil_cari',$data);
		}

        
	}

}