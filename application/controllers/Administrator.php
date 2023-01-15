<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		is_logged_in();
	}

	public function index()
	{
		$atas = array(
			'menu' => 'beranda'
		);
		$this->load->view('templates/admin/header', $atas);

		$data = array(
			'judul' => 'aplikasi jalan rusak pekanbaru',
			'bencana' => $this->m_model->data_bencana(),

		);
		$this->load->view('beranda', $data, FALSE);
		$this->load->view('templates/admin/footer');
	}

	public function biodata()
	{
		$atas = array(
			'menu' => 'biodata'
		);
		$this->load->view('templates/admin/header', $atas);
		$data = array(
			'judul' => 'Biodata Penulis',


		);
		$this->load->view('biodata', $data);
		$this->load->view('templates/admin/footer');
	}

	public function bencana()
	{
		$atas = array(
			'menu' => 'bencana'
		);
		$this->load->view('templates/admin/header', $atas);
		$data = array(
			'judul' => 'Data Lahan Pertanian'

		);
		$this->load->view('bencana', $data);
		$this->load->view('templates/admin/footer');
	}
	public function tampilBencana($offset = null)
	{
		$search = array(
			'keyword' => trim($this->input->post('search_key')),
		);

		$this->load->library('pagination');

		$limit = 5;
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config['base_url'] = base_url('administrator/tampilBencana');
		$config['total_rows'] = $this->m_model->get_tampil_bencana($limit, $offset, $search, $count = true, 'bencana', 'kecamatan', 'id');
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="" class="current_page">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = '<span uk-pagination-next></span>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '<span uk-pagination-previous></span>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['bencana'] = $this->m_model->get_tampil_bencana($limit, $offset, $search, $count = false, 'bencana', 'kecamatan', 'id');
		$data['pagelinks'] = $this->pagination->create_links();
		$this->load->view('ajax/bencana_ajax', $data);
	}


	public function saveDataBencana()
	{
		$kecamatan = $this->input->post('kecamatan', TRUE);
		$lokasi = $this->input->post('lokasi', TRUE);
		$keterangan = $this->input->post('keterangan');
		$lat = $this->input->post('latitude', TRUE);
		$long = $this->input->post('longitude', TRUE);
		$kategori = $this->input->post('kategori', TRUE);
		$gambar = $this->input->post('gambar', TRUE);

		$latitude = trim($lat);
		$longitude = trim($long);


		$data = array(
			'kecamatan' => $kecamatan,
			'lokasi' => $lokasi,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'gambar' => $gambar,

		);
		$this->m_model->simpan('bencana', $data);
	}

	public function editDataBencana()
	{
		$id = $this->input->post('id', TRUE);
		$kecamatan = $this->input->post('kecamatan', TRUE);
		$lokasi = $this->input->post('lokasi', TRUE);
		$keterangan = $this->input->post('keterangan');
		$lat = $this->input->post('latitude', TRUE);
		$long = $this->input->post('longitude', TRUE);
		$kategori = $this->input->post('kategori', TRUE);
		$gambar = $this->input->post('gambar', TRUE);

		$latitude = trim($lat);
		$longitude = trim($long);


		$data = array(
			'kecamatan' => $kecamatan,
			'lokasi' => $lokasi,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'gambar' => $gambar,

		);
		$this->m_model->editdata('bencana', 'id', $id, $data);
	}


	public function hapusBencana()
	{
		$id = $this->input->post('id');

		$this->m_model->hapus('bencana', $id, 'id');
	}
	//Bencana

	// User
	public function users()
	{
		$atas = array(
			'menu' => 'users'
		);
		$this->load->view('templates/admin/header', $atas);
		$data = array(
			'judul' => 'Data Users',


		);
		$this->load->view('users', $data);
		$this->load->view('templates/admin/footer');
	}

	public function tampilUsers($offset = null)
	{
		$search = array(
			'keyword' => trim($this->input->post('search_key')),
		);

		$this->load->library('pagination');

		$limit = 5;
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config['base_url'] = base_url('administrator/tampilUsers');
		$config['total_rows'] = $this->m_model->get_tampil($limit, $offset, $search, $count = true, 'users', 'namaLengkap', 'idUsers');
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_userss'] = 3;
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="" class="current_page">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_users'] = '<span uk-pagination-next></span>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_users'] = '<span uk-pagination-previous></span>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_users'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_users'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['users'] = $this->m_model->get_tampil($limit, $offset, $search, $count = false, 'users', 'namaLengkap', 'idUsers');
		$data['pagelinks'] = $this->pagination->create_links();
		$this->load->view('ajax/users_ajax', $data);
	}

	public function saveDataUsers()
	{
		$pass = $this->input->post('password', TRUE);
		$data = array(
			'namaLengkap' => $this->input->post('nama', TRUE),
			'username' => $this->input->post('username', TRUE),
			'password' => password_hash($pass, PASSWORD_DEFAULT),
			'status' => $this->input->post('status', TRUE),
			'md4' => md5($pass),
		);
		$this->m_model->simpan('users', $data);
	}
	public function editDataUsersPass()
	{
		$id = $this->input->post('id', TRUE);
		$pass = $this->input->post('password', TRUE);

		$data = array(
			'namaLengkap' => $this->input->post('nama', TRUE),
			'username' => $this->input->post('username', TRUE),
			'password' => password_hash($pass, PASSWORD_DEFAULT),
			'status' => $this->input->post('status', TRUE),
			'md4' => md5($pass),
		);


		$this->m_model->editdata('users', 'idUsers', $id, $data);
	}
	public function editDataUsers()
	{
		$id = $this->input->post('id', TRUE);

		$data = array(
			'namaLengkap' => $this->input->post('nama', TRUE),
			'username' => $this->input->post('username', TRUE),
			'status' => $this->input->post('status', TRUE),
		);


		$this->m_model->editdata('users', 'idUsers', $id, $data);
	}
	public function hapusUsers()
	{
		$id = $this->input->post('id');
		$this->m_model->hapus('users', $id, 'idUsers');
	}
	//
	// User
}
