<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function login($data)
	{
		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('pemerintah');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function get_user_data($email) 
	{
		$condition = "email =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('pemerintah');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
    }
    
    public function get_hitung_ukm()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM ukm");
		return $query;
    }


    public function get_hitung_produk()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM produk");
		return $query;
    }

    
    public function get_hitung_berita()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM berita");
		return $query;
    }

    
    public function get_hitung_event()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM event");
		return $query;
    }

    public function get_user_ukm()
    {
        $query = $this->db->get('ukm');
        return $query->result();
    }

    public function aktivasi($id)
    {
        $query = $this->db->where('id_ukm', $id)->update('ukm', array('status'=>1));
        return $query;
    }

    public function get_berita()
    {
        $query = $this->db->get('berita');
        return $query->result();
    }

    function update_data($where,$data,$tabel)
    {
        $this->db->where($where);
        $this->db->update($tabel, $data);
    }

    public function hapus($where)
    {
        $this->db->where($where);
        $this->db->delete('berita');
    }

    public function get_berita_by_id($id)
    {
        $query = $this->db->where('id_berita', $id)->get('berita');
        return $query->result();
    }
    public function get_event_by_id($id)
    {
        $query = $this->db->where('id_event', $id)->get('event');
        return $query->result();
    }


    public function get_event()
    {
        $query = $this->db->get('event');
        return $query->result();
    }

    public function hapusevent($where)
    {
        $this->db->where($where);
        $this->db->delete('event');
    }

    public function tambah_event($post_image)
    {
        $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $this->input->post('nama_event'));
	    	$trim=trim($string);
	    	$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
            $slug=$pre_slug.'.html'; 

        $data = array(
            'id_pemerintah' => 1,
            'nama_event' => $this->input->post('nama_event'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal_event' => date('Y-m-d'),
            'gambar' => $post_image,
            'slug' => $slug
        );
	    return $this->db->insert('event', $data);

    }

    public function tambah_berita($post_image)
    {
        $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $this->input->post('judul_berita'));
	    	$trim=trim($string);
	    	$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
            $slug=$pre_slug.'.html'; 

        $data = array(
            'id_pemerintah' => 1,
            'judul_berita' => $this->input->post('judul_berita'),
            'isi_berita' => $this->input->post('isi_berita'),
            'tanggal_berita' => date('Y-m-d'),
            'kategori' => $this->input->post('kategori'),
            'gambar' => $post_image,
            'slug' => $slug
        );
	    return $this->db->insert('berita', $data);

    }
}