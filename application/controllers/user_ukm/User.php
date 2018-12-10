<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User UKM
 */
class User extends CI_Controller
{
    /**
     * User Ukm
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation']);
        $this->load->model('Userukm_model', 'userukm_model');
    }

    public function register()
    {
    	$this->form_validation->set_rules('nama_ukm', 'NamaUkm', 'required|min_length[3]');
    	$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
    	$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
    	$this->form_validation->set_rules('password', 'Password', 'required');

    	if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->load->view('user_ukm/login');
		} else {
			$config['upload_path'] = './upload/ukm';
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
			$this->userukm_model->register($enc_password, $post_image);

			$this->session->set_flashdata('msg', 'Pendaftaran UKM berhasil, silahkan login!');
			redirect('user_ukm/');
		}
    }

    public function login()
    {
    	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['login_ukm'])){
				$this->load->view('user_ukm/index');
			}else{
				$this->load->view('user_ukm/login');
			}
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->userukm_model->login($data);
			
			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->userukm_model->get_user_data($username);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'id_ukm' => $result[0]->id_ukm,
						'gambar' => $result[0]->gambar,
				);

				$test = $this->userukm_model->checkStatus($username);
				if ($test == true) {
					$this->session->set_userdata('login_ukm', $session_data);
					redirect(base_url('user_ukm'));
				} else {
					$this->session->set_flashdata('msg_error', 'Akun anda belum di konfirmasi');
					$this->load->view('user_ukm/login');
				}

					
				}
			} else {
				$this->session->set_flashdata('msg_error', 'Gagal');
				$this->load->view('user_ukm/login');
			}
		}
    }

    public function check_username_exists($username)
    {
    	$this->form_validation->set_message('check_username_exists', 'Username telah terdaftar. Silakan pilih username yang lain!');
    	if ($this->userukm_model->check_username_exists($username)) {
    		return true;
    	} else {
    		return false;
    	}
    }

    public function check_email_exists($email)
    {
    	$this->form_validation->set_message('check_email_exists', 'email telah terdaftar. Silakan pilih email yang lain!');
    	if ($this->userukm_model->check_email_exists($email)) {
    		return true;
    	} else {
    		return false;
    	}
    }

    public function logout() {

		// Removing session data
		$sess_array = array(
			'username' => ''
		);
			$this->session->unset_userdata('login_ukm', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('user_ukm/login', $data);

	}



}

?>