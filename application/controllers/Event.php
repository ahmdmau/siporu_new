<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('event_model');
		$this->load->library('pagination');
    }

    public function index()
	{
		$config = array();
        $config['base_url']= site_url('event/index');
        $config['total_rows'] = $this->db->count_all('event');
        $config['per_page'] = "3";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
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
		$data['eventdate'] = $this->event_model->get_event_bydate();
		$data['event'] = $this->event_model->get_all_event($config['per_page'], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('event', $data);
	
    }
    
    public function detail_event($slug)
	{
		$data['event'] = $this->event_model->get_event_by_slug($slug)->result();
		$this->load->view('detail-event', $data);		
	}

	public function cari()
    {
        $keyword = $this->input->get('query');
        $config = array();
        $config['base_url']= site_url('event/index');
        $config['total_rows'] = $this->event_model->count_all($keyword);
        $config['per_page'] = "3";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
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
        $data['pagination'] = $this->pagination->create_links();
        $data['query'] = $this->event_model->cari_event($config['per_page'], $data['page'], $keyword);
        $this->load->view('cari-event', $data);
    }
}