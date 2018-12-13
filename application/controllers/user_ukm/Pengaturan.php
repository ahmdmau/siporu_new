<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->library(['form_validation']);
        $this->load->model('pengaturan_model');
	}
	public function index()
	{
		$id = $this->session->userdata['login_ukm']['id_ukm'];
		$data['user'] = $this->pengaturan_model->get_detail_ukm($id);
		$this->load->view('user_ukm/pengaturan', $data);
	}

	public function aksi_setting()
	{
		$this->form_validation->set_rules('nama_ukm', 'NamaUkm', 'required|min_length[3]');
    	$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
    	$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
    	$this->form_validation->set_rules('password', 'Password', 'required');

    	if (!$this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$id = $this->session->userdata['login_ukm']['id_ukm'];
			$config['upload_path'] = './upload/ukm';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['overwrite'] = true;
            $config['file_name'] = $this->input->post('nama_ukm');
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);
			$result2 = $this->pengaturan_model->get_detail_ukm($id);
			// unlink('upload/ukm/' . $result2[0]->gambar);

            if(!$this->upload->do_upload('gambar')){
                    $errors = array('error' => $this->upload->display_errors());
                    $post_image = $result2[0]->gambar;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $data['upload_data']['file_name'];
            }

			$enc_password = md5($this->input->post('password'));
			$this->pengaturan_model->update($id, $enc_password, $post_image);
            $result = $this->pengaturan_model->get_detail_ukm($id);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'id_ukm' => $result[0]->id_ukm,
						'gambar' => $result[0]->gambar,
				);
			}

			$this->session->set_userdata('login_ukm', $session_data);


			$this->session->set_flashdata('update_ukm', 'Update data ukm berhasil');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}