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
		// Konfigurasi untuk pagination
		$config['base_url'] = base_url() . 'event';
		$config['total_rows'] = $this->db->count_all('event');
		$config['per_page'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['uri_segment'] = 0;
		
		$this->pagination->initialize($config);

		$data['eventdate'] = $this->event_model->get_event_bydate();
		$data['event'] = $this->event_model->get_all_event($config['per_page'], $config['uri_segment']);
		$this->load->view('event', $data);
	
    }
    
    public function detail_event($slug)
	{
		$data['event'] = $this->event_model->get_event_by_slug($slug)->result();
		$this->load->view('detail-event', $data);		
	}
}