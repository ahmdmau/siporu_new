<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public $foto = "default.jpg";
    // public $id_ukm = 1;

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login_ukm')){
                redirect('ukm/user/login');
        }

        $this->load->model('produkukm_model');
        $this->load->library('form_validation');
    }
    
    public function index()
	{
        $id = $this->session->userdata['login_ukm']['id_ukm'];
        $where = array('id_ukm' => $id);
        $data["produk"] = $this->produkukm_model->getByIdUkm('produk', $where)->result();
        $this->load->view("user_ukm/produk/lihat_produk", $data);
	}

    // public function tambah_produk()
    // {
    //     $data["kategori"] = $this->produkukm_model->getKategori();
    //     $data["komoditas"] = $this->produkukm_model->getKomoditas();
    //     $data["teknologi"] = $this->produkukm_model->getTeknologi();
    //     $data["bbaku"] = $this->produkukm_model->getBbaku();
    //     $this->load->view("ukm/produk/tambah_produk", $data);
    // }

    public function tambah_produk()
    {
        // Cek login
        
        // get data
        $data["kategori"] = $this->produkukm_model->getKategori();
        $data["komoditas"] = $this->produkukm_model->getKomoditas();
        $data["teknologi"] = $this->produkukm_model->getTeknologi();
        $data["bbaku"] = $this->produkukm_model->getBbaku();

        // Form Validasi
        $this->form_validation->set_rules('nama_produk', 'Nama_Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');

        if ($this->form_validation->run() ===  false) {
            $this->load->view('user_ukm/produk/tambah_produk', $data);
        } else {
            $config['upload_path'] = './upload/produk';
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

            $this->produkukm_model->insertData($post_image);

            $this->session->set_flashdata('success', 'Simpan Data Sukses');

            redirect('user_ukm/produk');
        }



    }

    public function edit($id)
    {
        if (!isset($id)) {
            redirect('user_ukm/produk');
        }

        $where = array('id_produk' => $id);
        $data['produk'] = $this->produkukm_model->edit_data('produk', $where)->result();
        $data["kategori"] = $this->produkukm_model->getKategori();
        $data["komoditas"] = $this->produkukm_model->getKomoditas();
        $data["teknologi"] = $this->produkukm_model->getTeknologi();
        $data["bbaku"] = $this->produkukm_model->getBbaku();
        $data['image_o'] = $this->foto;
        $this->load->view('user_ukm/produk/edit_produk', $data);        
    }

    public function update()
    {
        $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $this->input->post('nama_produk'));
	    $trim=trim($string);
	    $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
        $slug=$pre_slug.'.html'; 

        $nama_produk  = $this->input->post('nama_produk');
        $deskripsi    = $this->input->post('deskripsi');
        $harga        = $this->input->post('harga');
        $stok         = $this->input->post('stok');
        $id_kategori  = $this->input->post('id_kategori');
        $id_komoditas = $this->input->post('id_komoditas');
        $id_teknologi = $this->input->post('id_teknologi');
        $id_bbaku     = $this->input->post('id_bbaku');
        $id_produk     = $this->input->post('id_produk');

        if (!empty($_FILES['gambar']['name'])) {
                // upload gambar
            $config['upload_path'] = './upload/produk';
            $config['allowed_types'] = 'tif|jpg|png';
            $config['file_name'] = $nama_produk;
            $config['overwrite'] = true;
            $config['max_size'] = 1024;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $data = array('upload_data' => $this->upload->data());
                $gambar= $data['upload_data']['file_name'];
            } 
        } else {
                $gambar = $this->input->post('old_image');
        }

        $data = array(
            "id_kategori"  => $id_kategori,
            "id_teknologi" => $id_teknologi,
            "id_komoditas" => $id_komoditas,
            "id_bbaku"     => $id_bbaku,
            "nama_produk"  => $nama_produk,
            "gambar"       => $gambar,
            "harga"        => $harga,
            "deskripsi"    => $deskripsi,
            "stok"         => $stok,
            "slug"         => $slug
        );

        $where = array(
            "id_produk" => $id_produk
        );

        $res = $this->produkukm_model->update_data($where, $data, 'produk');
        if ($res == true) {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        } else {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect(base_url('user_ukm/produk/'));

    }

    public function hapus($id)
    {
        $where = array('id_produk' => $id);
        $this->produkukm_model->hapus_data($where, 'produk');
        redirect(base_url('user_ukm/produk/index'));
    }
}
