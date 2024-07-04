<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_m', 'Home');
	}



	public function index()
	{
		// code untuk menampilkan semua data :
		$query = $this->Home->get();

		$data = array(
			'header' => 'SIKAS',
			'pesan1' => 'Selamat Datang Di Sistem Informasi Pengelolaan Kas Masjid Besar Peusangan',
			'pesan2' => 'Dashboard Utama',
			'pesan3' => 'Pengelolaan Kas Masjid Besar Peusangan',
			'total_masuk' => 0,
			'total_keluar' => 0,
			'total' => 0,
		);

		$data['home'] = $query->result();

		$this->load->view('template/_header', $data);
		$this->load->view('home', $data);
		$this->load->view('template/_footer');
	}

}
