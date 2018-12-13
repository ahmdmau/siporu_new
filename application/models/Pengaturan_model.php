<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_model extends CI_Model{
    public function get_detail_ukm($id)
    {
        $condition = "id_ukm =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('ukm');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
    }

    public function update($id, $enc_password, $post_image)
    {
            $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $this->input->post('nama_ukm'));
	    	$trim=trim($string);
	    	$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
            $slug=$pre_slug.'.html'; 

	    	$data = array(
	    		'nama_ukm' => $this->input->post('nama_ukm'),
	    		'nama_pemilik' => $this->input->post('nama_pemilik'),
	    		'email' => $this->input->post('email'),
	    		'password' => $enc_password,
	    		'deskripsi_ukm' => $this->input->post('deskripsi_ukm'),
	    		'alamat' => $this->input->post('alamat'),
	    		'no_telp' => $this->input->post('no_telp'),
	    		'instagram' => $this->input->post('instagram'),
	    		'website' => $this->input->post('website'),
	    		'kota' => $this->input->post('kota'),
	    		'username' => $this->input->post('username'),
	    		'date_created' => date('Y-m-d H:i:s'),
	    		'gambar' => $post_image,
	    		'jam_buka' => $this->input->post('jam_buka'),
	    		'jam_tutup' => $this->input->post('jam_tutup'),
	    		'slug' => $slug
	    	);
		
		return $this->db->where('id_ukm', $id)->update('ukm', $data);
    }

}