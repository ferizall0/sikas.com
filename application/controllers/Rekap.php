<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rekap_m', 'Rekap');
	}

	public function index()
	{
		// code untuk menampilkan semua data :
		$query = $this->Rekap->get();

		$data = array(
			'header' => 'Data Rekap Kas',
			'no' => 1,
			'total' => 0,
			'total_keluar' => 0,
			'saldo_akhir' => 0,
		);

		$data['rekap'] = $query->result();

		$this->load->view('template/_header', $data);
		$this->load->view('rekap', $data);
		$this->load->view('template/_footer');
	}

}
