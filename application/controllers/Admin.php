<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
		$this->load->library('form_validation');
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
		$this->ckeditor->config['toolbar'] = array(
		                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
		                                                    );
		$this->ckeditor->config['language'] = 'it';
		$this->ckeditor->config['width'] = '730px';
		$this->ckeditor->config['height'] = '300px';            
													
    }


    public function login()
    {
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['login_admin'])){
				$this->load->view('admin/index');
			}else{
				$this->load->view('admin/login');
			}
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->admin_model->login($data);
			
			if ($result == TRUE) {
				$email = $this->input->post('email');
				$result = $this->admin_model->get_user_data($email);
				if ($result != false) {
					$session_data = array(
						'nama' => $result[0]->nama,
						'email' => $result[0]->email,
                        'id_pemerintah' => $result[0]->id_pemerintah
				);

					$this->session->set_userdata('login_admin', $session_data);
					$this->session->set_flashdata('logged_success', 'Login Sukses');
				// $this->load->view('dashboard');
                    redirect(base_url('admin/dashboard'));					
				}
			} else {
				$this->session->set_flashdata('msg_error', 'Username atau passsword salah! Silahkan coba kembali');
				redirect(base_url('admin/login'));
			}
		}
        // $this->load->view('admin/index.php');
    }

    public function dashboard()
    {
        
		// $this->load->view('admin/index.php');
		$data['hitungUkm'] = $this->admin_model->get_hitung_ukm()->result();
		$data['hitungProduk'] = $this->admin_model->get_hitung_produk()->result();
		$data['hitungBerita'] = $this->admin_model->get_hitung_berita()->result();
		$data['hitungEvent'] = $this->admin_model->get_hitung_event()->result();
        $this->load->view('admin/index', $data);
        # code...
    }

    public function logout() {

		// Removing session data
		$sess_array = array(
			'email' => ''
		);
			$this->session->unset_userdata('login_admin', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			redirect(base_url());

	}

	public function user_ukm()
	{
		$data['userukm'] = $this->admin_model->get_user_ukm();
		$this->load->view('admin/userukm', $data);
	}

	public function aktivasi($id)
	{
		$data['aktivasi'] = $this->admin_model->aktivasi($id);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function berita()
	{
		$data['berita'] = $this->admin_model->get_berita();
		$this->load->view('admin/berita', $data);
	}

	public function tambah_berita()
	{
		$this->load->view('admin/tambah_berita');
	}

	public function aksi_tambah_berita()
	{
		$this->form_validation->set_rules('judul Berita', 'Judul Berita ', 'required');
		$this->form_validation->set_rules('isi_berita', 'Isi Berita ', 'required');
    	$this->form_validation->set_rules('kategori', 'Kategori', 'required');
        
        if ($this->form_validation->run() == FALSE ) {
            $this->session->set_flashdata('errors', "GAGAL");
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $config['upload_path'] = './upload/berita';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['overwrite'] = true;
            $config['file_name'] = $this->input->post('judul_berita');
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')){
                $data = array('upload_data' => $this->upload->data());
				$post_image = $data['upload_data']['file_name'];
            } else {
				$errors = array('error' => $this->upload->display_errors());
                $post_image = '01.jpg';
            }

			$this->admin_model->tambah_berita($post_image);

            $this->session->set_flashdata('tambah_berita_success', 'Data Sukses di Simpan!');
            
            redirect(base_url('admin/berita'));
		}
	}

	public function update_berita()
	{
		$string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $this->input->post('judul_berita'));
	    $trim=trim($string);
	    $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
        $slug=$pre_slug.'.html'; 

		$id_pemerintah = 1;
        $judul_berita  = $this->input->post('judul_berita');
        $isi_berita    = $this->input->post('isi_berita');
        $kategori         = $this->input->post('kategori');
        $id_berita         = $this->input->post('id_berita');

        if (!empty($_FILES['gambar']['name'])) {
                // upload gambar
            $config['upload_path'] = './upload/berita';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['file_name'] = $judul_berita;
            $config['overwrite'] = true;
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $data = array('upload_data' => $this->upload->data());
                $gambar= $data['upload_data']['file_name'];
            } 
        } else {
                $gambar = $this->input->post('old_image');
        }

        $data = array(
            'id_pemerintah' => $id_pemerintah,
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'kategori' => $kategori,
            'gambar' => $gambar,
            'slug' => $slug
        );

        $where = array(
            "id_berita" => $id_berita
        );

        $res = $this->admin_model->update_data($where, $data, 'berita');
        if ($res == true) {
            $this->session->set_flashdata('success_update', 'Berhasil disimpan');
        } else {
            $this->session->set_flashdata('error_update', 'Gagal Edit Berita');
        }

        redirect(base_url('admin/berita'));
	}

	public function hapusberita($id)
	{
		$where = array('id_berita' => $id);
        $this->admin_model->hapus($where);
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function editberita($id)
	{
		$data['berita'] = $this->admin_model->get_berita_by_id($id);
		$this->load->view('admin/editberita', $data);
	}

	public function event()
	{
		$data['event'] = $this->admin_model->get_event();
		$this->load->view('admin/event', $data);
	}

	public function tambah_event()
	{
		$this->load->view('admin/tambah_event');
	}

	public function aksi_event()
	{
		$this->form_validation->set_rules('nama_event', 'Judul event', 'required');
    	$this->form_validation->set_rules('deskripsi', 'Isi event', 'required');
        
        if ($this->form_validation->run() == FALSE ) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $config['upload_path'] = './upload/event';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['overwrite'] = true;
            $config['file_name'] = $this->input->post('nama_event');
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')){
                $data = array('upload_data' => $this->upload->data());
				$post_image = $data['upload_data']['file_name'];
            } else {
				$errors = array('error' => $this->upload->display_errors());
                $post_image = '01.jpg';
            }

			$this->admin_model->tambah_event($post_image);

            $this->session->set_flashdata('tambah_event_success', 'Data Sukses di Simpan!');
            
            redirect(base_url('admin/event'));
		}
	}

	public function hapusevent($id)
	{
		$where = array('id_event' => $id);
        $this->admin_model->hapusevent($where);
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function editevent($id)
	{
		$data['event'] = $this->admin_model->get_event_by_id($id);
		$this->load->view('admin/editevent', $data);
	}

	public function update_event()
	{
		$string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $this->input->post('nama_event'));
	    $trim=trim($string);
	    $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
        $slug=$pre_slug.'.html'; 

		$id_pemerintah = 1;
        $nama_event  = $this->input->post('nama_event');
        $deskripsi    = $this->input->post('deskripsi');
        $id_event         = $this->input->post('id_event');

        if (!empty($_FILES['gambar']['name'])) {
                // upload gambar
            $config['upload_path'] = './upload/event';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['file_name'] = $nama_event;
            $config['overwrite'] = true;
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $data = array('upload_data' => $this->upload->data());
                $gambar= $data['upload_data']['file_name'];
            } 
        } else {
                $gambar = $this->input->post('old_image');
        }

        $data = array(
            'id_pemerintah' => $id_pemerintah,
            'nama_event' => $nama_event,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'slug' => $slug
        );

        $where = array(
            "id_event" => $id_event
        );

        $res = $this->admin_model->update_data($where, $data, 'event');
        if ($res == true) {
            $this->session->set_flashdata('success_update', 'Berhasil disimpan');
        } else {
            $this->session->set_flashdata('error_update', 'Gagal Edit Berita');
        }

        redirect(base_url('admin/event'));
	}
}