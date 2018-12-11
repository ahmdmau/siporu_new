<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Userukm_model extends CI_Model
	{
	    public function register($enc_password, $post_image)
	    {
	    	// buat slug
	    	// '/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/'
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
	    		'status' => 0,
	    		'slug' => $slug
	    	);

	    	return $this->db->insert('ukm', $data);
	    }


	    public function login($data)
	    {
	    	$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('ukm');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
	    }

	    public function get_user_data($username) {

			$condition = "username =" . "'" . $username . "'";
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

	    public function check_username_exists($username)
    	{
    		$query = $this->db->get_where('ukm', array('username' => $username));
    		if (empty($query->row_array())) {
    			return true;
    		} else {
    			return false;
    		}
    	}

    	public function check_email_exists($email)
    	{
    		$query = $this->db->get_where('ukm', array('email' => $email));
    		if (empty($query->row_array())) {
    		return true;
    		} else {
    		return false;
    		}
    	}

    	public function checkStatus($username)
    	{
    		$condition = "username =" . "'" . $username . "'";
			$this->db->select('status');
			$this->db->from('ukm');
			$this->db->where($condition);
			$query = $this->db->get()->row()->status;

			if ($query == 1) {
				return true;
			} else {
				return false;
			}
    	}
	}




?>