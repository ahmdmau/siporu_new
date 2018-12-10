<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function register($enc_password, $post_image)
    {
        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'email' => $this->input->post('email'),
            'password' => $enc_password,
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'gambar' => $post_image
        );

        return $this->db->insert('pembeli', $data);
    }

    public function login($data)
	{
		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('pembeli');
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
		$this->db->from('pembeli');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function hitung_transaksi($id_pembeli)
	{
		$query = $this->db->query("SELECT COUNT(*) as count FROM invoices WHERE id_pembeli = '$id_pembeli' GROUP BY id_pembeli");
		return $query;
	}

	public function get_shopping_history($id)
	{
		$this->db->select('invoices.*, SUM(orders.qty * orders.harga) as total, orders.nama_produk');    
		$this->db->from('invoices');
		$this->db->join('pembeli', 'pembeli.id_pembeli = invoices.id_pembeli');
		$this->db->join('orders', 'orders.id_invoices = invoices.id');
		$this->db->where('pembeli.id_pembeli', $id);
		$this->db->group_by('orders.id_invoices');
		$hasil = $this->db->get();
	// 	$hasil = $this->db->select('i.*, SUM(o.qty * o.harga) as total')
	// 					  ->from('invoices i, pembeli p, orders o')
	// 					  ->where('p.id_pembeli', $id)
	// 					  ->where('p.id_pembeli = i.id_pembeli')
	// 					  ->where('o.id_invoices = i.id_pembeli')
	// 					//   ->group_by('o.id_invoices')
	// 					  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function mark_invoice_confirmed($id_invoice, $jumlah)
	{
		$ret = true;
		$invoice = $this->db->where('id', $id_invoice)->limit(1)->get('invoices');
		if ($invoice->num_rows() == 0) {
			$ret = $ret && false;
		} else {
			$total = $this->db->select('harga as total')
							  ->where('id_invoices', $id_invoice)
							  ->get('orders');
			if($total->row()->total > $jumlah){
				$ret = $ret && false;
			} else {
				$this->db->where('id', $id_invoice)->update('invoices', array('status'=>'confirmed'));
			}
		}
		return $ret;
	}

	public function check_current_password($id)
	{
		$new = md5($this->input->post('newpassword'));
		$query = $this->db->where('id_pembeli', $id)->get('pembeli');
		$row = $query->result();
		if(md5($row->password) == $new){
			return true;
		} else{
			return false;
		}


	}

	public function update_user($id,$post_image)
	{
		$data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'gambar' => $post_image
		);
		
		return $this->db->where('id_pembeli', $id)->update('pembeli', $data);


        // return $this->db->replace('pembeli', $data);
	}

	public function get_detail_pesanan($id)
	{
		$this->db->select('*');    
		$this->db->from('orders');
		// $this->db->join('pembeli', 'pembeli.id_pembeli = invoices.id_pembeli');
		// $this->db->join('orders', 'orders.id_invoices = invoices.id');
		$this->db->where('id_invoices', $id);
		// $this->db->group_by('orders.id_invoices');
		$hasil = $this->db->get();
	// 	$hasil = $this->db->select('i.*, SUM(o.qty * o.harga) as total')
	// 					  ->from('invoices i, pembeli p, orders o')
	// 					  ->where('p.id_pembeli', $id)
	// 					  ->where('p.id_pembeli = i.id_pembeli')
	// 					  ->where('o.id_invoices = i.id_pembeli')
	// 					//   ->group_by('o.id_invoices')
	// 					  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function get_invoices_id($id)
	{
		$this->db->select('*');    
		$this->db->from('invoices');
		// $this->db->join('pembeli', 'pembeli.id_pembeli = invoices.id_pembeli');
		// $this->db->join('orders', 'orders.id_invoices = invoices.id');
		$this->db->where('id', $id);
		// $this->db->group_by('orders.id_invoices');
		$hasil = $this->db->get();
	// 	$hasil = $this->db->select('i.*, SUM(o.qty * o.harga) as total')
	// 					  ->from('invoices i, pembeli p, orders o')
	// 					  ->where('p.id_pembeli', $id)
	// 					  ->where('p.id_pembeli = i.id_pembeli')
	// 					  ->where('o.id_invoices = i.id_pembeli')
	// 					//   ->group_by('o.id_invoices')
	// 					  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function get_ukm_invoices($id)
	{
		$this->db->select('u.*, i.*');    
		$this->db->from('invoices as i');
		$this->db->join('ukm as u', 'i.id_ukm = u.id_ukm');
		// $this->db->join('orders', 'orders.id_invoices = invoices.id');
		$this->db->where('id', $id);
		// $this->db->group_by('orders.id_invoices');
		$hasil = $this->db->get();
	// 	$hasil = $this->db->select('i.*, SUM(o.qty * o.harga) as total')
	// 					  ->from('invoices i, pembeli p, orders o')
	// 					  ->where('p.id_pembeli', $id)
	// 					  ->where('p.id_pembeli = i.id_pembeli')
	// 					  ->where('o.id_invoices = i.id_pembeli')
	// 					//   ->group_by('o.id_invoices')
	// 					  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function get_user_invoices($id)
	{
		$this->db->select('p.*, i.*');    
		$this->db->from('invoices as i');
		$this->db->join('pembeli as p', 'i.id_pembeli = p.id_pembeli');
		// $this->db->join('orders', 'orders.id_invoices = invoices.id');
		$this->db->where('id', $id);
		// $this->db->group_by('orders.id_invoices');
		$hasil = $this->db->get();
	// 	$hasil = $this->db->select('i.*, SUM(o.qty * o.harga) as total')
	// 					  ->from('invoices i, pembeli p, orders o')
	// 					  ->where('p.id_pembeli', $id)
	// 					  ->where('p.id_pembeli = i.id_pembeli')
	// 					  ->where('o.id_invoices = i.id_pembeli')
	// 					//   ->group_by('o.id_invoices')
	// 					  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function getTotal($id)
	{
		$this->db->select('invoices.*, SUM(orders.qty * orders.harga) as total, orders.nama_produk');    
		$this->db->from('invoices');
		$this->db->join('orders', 'orders.id_invoices = invoices.id');
		$this->db->where('invoices.id', $id);
		$this->db->group_by('orders.id_invoices');
		$hasil = $this->db->get();
	// 	$hasil = $this->db->select('i.*, SUM(o.qty * o.harga) as total')
	// 					  ->from('invoices i, pembeli p, orders o')
	// 					  ->where('p.id_pembeli', $id)
	// 					  ->where('p.id_pembeli = i.id_pembeli')
	// 					  ->where('o.id_invoices = i.id_pembeli')
	// 					//   ->group_by('o.id_invoices')
	// 					  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	

	
}
