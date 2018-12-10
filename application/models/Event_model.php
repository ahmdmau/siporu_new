<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

    public function get_event_bydate()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->order_by('tanggal_event', 'desc');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();       
    }

    public function get_event_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('slug', $slug);
        $query = $this->db->get();
        return $query;       
    }

    public function get_all_event($number, $offset)
    {
        return $query = $this->db->get('event', $number, $offset)->result();        
    }
}
