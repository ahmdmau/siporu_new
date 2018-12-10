<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Produkukm_model extends CI_Model {

    private $_tabel = "produk";
    private $_tabelkategori = "kategori";
    private $_tabelkomoditas = "komoditas";
    private $_tabelteknologi = "teknologi";
	private $_tabelbbaku = "bb_baku";
	public $nama;
    public $harga;
    public $gambar = "default.jpg";
    public $deskripsi;
    public $stok;
    public $id_kategori;
    public $id_komoditas;
	public $id_ukm = 1;
    
    public function __construct()
    {
        parent::__construct();
    }

	public function rules()
	{
        return [
		['field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required'],

        ['field' => 'harga',
        'label' => 'Harga',
        'rules' => 'numeric'],
        
        ['field' => 'deskripsi',
        'label' => 'Deskripsi',
		'rules' => 'required'],
		
        ['field' => 'stok',
        'label' => 'Stok',
        'rules' => 'required']
        ];
	}

	public function getAll()
	{
		return $this->db->get($this->_tabel);
	}

    public function getById($id)
    {
        return $this->db->get_where($this->_tabel, ["id_produk" => $id])->row();
    }

    function getByIdUkm($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }

    public function getKategori()
    {
        return $this->db->get($this->_tabelkategori)->result();
    }


    public function getKomoditas()
    {
        return $this->db->get($this->_tabelkomoditas)->result();
    }


    public function getTeknologi()
    {
        return $this->db->get($this->_tabelteknologi)->result();
    }


    public function getBbaku()
    {
        return $this->db->get($this->_tabelbbaku)->result();
    }


    // Tambah Produk
    public function insertData($post_image)
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
        $id_ukm       = $this->session->userdata['login_ukm']['id_ukm'];
        
        $dataa = array(
            "id_ukm" => $id_ukm,
            "id_kategori"  => $id_kategori,
            "id_teknologi" => $id_teknologi,
            "id_komoditas" => $id_komoditas,
            "id_bbaku"     => $id_bbaku,
            "nama_produk"  => $nama_produk,
            "gambar"       => $post_image,
            "harga"        => $harga,
            "deskripsi"    => $deskripsi,
            "stok"         => $stok,
            "slug"         => $slug 
        );     

        return $this->db->insert($this->_tabel, $dataa);
    }

    function edit_data($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }

    function update_data($where,$data,$tabel)
    {
        $this->db->where($where);
        $this->db->update($tabel, $data);
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }


}


// view id bahan baku