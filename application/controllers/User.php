<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('user_model');
		$this->load->model('produk_model');
		$this->load->library('form_validation');
		
    }

    public function dashboard()
    {
		$id = $this->session->userdata['logged_in']['id_pembeli'];
		$data['riwayat'] = $this->user_model->get_shopping_history($id);
		// $where = array('id_ukm' => $id);
		$data["total"] = $this->user_model->hitung_transaksi($id)->result();
        $this->load->view('dashboard', $data);
    }

    public function register()
    {
    	$this->form_validation->set_rules('nama_lengkap', 'NamaLengkap', 'required');
    	$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
    	$this->form_validation->set_rules('no_telp', 'NoTelepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        
        if ($this->form_validation->run() == FALSE ) {
            $this->session->set_flashdata('error_mail', 'Email sudah digunakan!');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $config['upload_path'] = './upload/user';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['overwrite'] = true;
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('gambar')){
                    $errors = array('error' => $this->upload->display_errors());
                    $post_image = 'default.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $data['upload_data']['file_name'];
            }

			$enc_password = md5($this->input->post('password'));
			$this->user_model->register($enc_password, $post_image);

            $this->session->set_flashdata('msg', 'Pendaftaran berhasil, silahkan login!');
            
            redirect(base_url());
		}
    }

    public function login()
    {
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('user/dashboard');
			}else{
				$this->load->view('index');
			}
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->user_model->login($data);
			
			if ($result == TRUE) {
				$email = $this->input->post('email');
				$result = $this->user_model->get_user_data($email);
				if ($result != false) {
					$session_data = array(
						'nama_lengkap' => $result[0]->nama_lengkap,
						'email' => $result[0]->email,
                        'id_pembeli' => $result[0]->id_pembeli,
                        'gambar' => $result[0]->gambar
				);

					$this->session->set_userdata('logged_in', $session_data);
					$this->session->set_flashdata('logged_success', 'Login Sukses');
				// $this->load->view('dashboard');
                    redirect(base_url('user/dashboard'));
				

					
				}
			} else {
				$this->session->set_flashdata('msg_error', 'Username atau passsword salah! Silahkan coba kembali');
				redirect(base_url());
			}
		}
    }

    public function logout() {

		// Removing session data
		$sess_array = array(
			'email' => ''
		);
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			redirect(base_url());

	}

    public function check_email_exists($email)
    {
    		$query = $this->db->get_where('pembeli', array('email' => $email));
    		if (empty($query->row_array())) {
    		return true;
    		} else {
    		return false;
    		}
	}
	
	public function add_to_cart($id_produk)
	{
		$produk = $this->produk_model->find($id_produk);
		$data = array(
			'id'      => $produk->id_produk,
        	'qty'     => 1,
        	'price'   => $produk->harga,
			'name'    => $produk->nama_produk,
			'id_ukm'  => $produk->id_ukm
		);
	
		$this->cart->insert($data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function keranjang()
	{
		$this->load->view('keranjang');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect(base_url());
	}

	public function konfirmasi_pesanan($id_invoice = 0)
	{
		$this->form_validation->set_rules('id_invoices', 'Id Invoices', 'required|integer');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer');
		
		if ($this->form_validation->run() == FALSE) {
			if ($this->input->post('id_invoices')) {
				$data['id_invoice'] = set_value('id_invoices');
			} else {
				$data['id_invoice'] = $id_invoice;
			}
			$this->load->view('konfirmasi_pesanan', $data);
		} else{
			$config['upload_path'] = './upload/bukti_trf';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['overwrite'] = true;
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('bukti_trf')){
                    $errors = array('error' => $this->upload->display_errors());
                    $post_image = 'default.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $data['upload_data']['file_name'];
			}
			
			$isValid = $this->user_model->mark_invoice_confirmed(set_value('id_invoices'), set_value('jumlah'), $post_image);
			if ($isValid) {
				$this->session->set_flashdata('message', 'Terima kasih.. Kami akan memeriksa pembarayan pesanan anda!');
				redirect('user/riwayat_pesanan');
			} else{
				$this->session->set_flashdata('error', 'Jumlah atau Invoice Id salah.. Silahkan coba kembali');
				redirect('user/konfirmasi_pesanan/' . set_value('id_invoices'));
			}
		}
	}

	public function riwayat_pesanan()
	{
		$id = $this->session->userdata['logged_in']['id_pembeli'];
		$data['riwayat'] = $this->user_model->get_shopping_history($id);
		$this->load->view('riwayat', $data);
	}

	public function setting()
	{
		$email = $this->session->userdata['logged_in']['email'];
		$data['user'] = $this->user_model->get_user_data($email);
		$this->load->view('setting', $data);
	}

	public function aksi_setting()
	{
		$this->form_validation->set_rules('nama_lengkap', 'NamaLengkap', 'required');
    	$this->form_validation->set_rules('email', 'Email', 'required');
    	$this->form_validation->set_rules('no_telp', 'NoTelepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        
        if ($this->form_validation->run() == FALSE ) {
            $this->session->set_flashdata('error_form', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
				$id = $this->session->userdata['logged_in']['id_pembeli'];
				$config['upload_path'] = './upload/user';
            	$config['allowed_types'] = 'tif|jpg|png';
            	$config['overwrite'] = true;
            	$config['max_size'] = '2048';
            	$config['max_width'] = '2000';
            	$config['max_height'] = '2000';

            	$this->load->library('upload', $config);

            	if(!$this->upload->do_upload('gambar')){
            	        $errors = array('error' => $this->upload->display_errors());
            	        $post_image = 'default.jpg';
            	} else {
            	    $data = array('upload_data' => $this->upload->data());
            	    $post_image = $data['upload_data']['file_name'];
            	}

				// $enc_password = md5($this->input->post('newpassword'));
				$this->user_model->update_user($id,$post_image);

            	$this->session->set_flashdata('new_pass_success', 'Update Berhasil');
			
            	redirect($_SERVER['HTTP_REFERER']);
		}
	}

	
	public function detail_pesanan($id)
	{
		$data['detail'] = $this->user_model->get_detail_pesanan($id);
		$data['detailI'] = $this->user_model->get_invoices_id($id);
		$this->load->view('detail_pesanan', $data);
		
	}

	public function invoices($id)
	{
		$data['detailI'] = $this->user_model->get_invoices_id($id);
		$data['detail'] = $this->user_model->get_detail_pesanan($id);
		$data['getukm'] = $this->user_model->get_ukm_invoices($id);
		$data['getuser'] = $this->user_model->get_user_invoices($id);
		$data['getTotal'] = $this->user_model->getTotal($id);
		$this->load->view('invoice', $data);
	}

	public function batal_pesanan($id)
	{
		$isValid = $this->user_model->batal_pesanan($id);
		$this->session->set_flashdata('batal_pesan', 'Pesanan telah dibatalkan.');
		redirect($_SERVER['HTTP_REFERER']);

	}
}
