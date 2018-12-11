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

    public function get_all_event($limit, $start)
    {
        $sql = "select * from event limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();   
    }

    public function count_all($kategori)
    {
        // if ($kategori == "NULL") $kategori = "";
        $sql = "select * from event where nama_event like '%$kategori%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function cari_event($limit, $start, $keywords)
    {
        $sql = "select * from event where nama_event like '%$keywords%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

}
