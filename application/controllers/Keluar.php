<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keluar_m', 'Keluar');
	}

	public function index()
	{
		// code untuk menampilkan semua data :
		$query = $this->Keluar->get();

		$data = array(
			'header' => 'Data Kas Keluar',
			'no' => 1,
			'total' => 0,
		);

		$data['keluar'] = $query->result();

		$this->load->view('template/_header', $data);
		$this->load->view('keluar', $data);
		$this->load->view('template/_footer');
	}

	public function proses()
	{
		if (isset($_POST['simpan'])) {
			$inputan = $this->input->post(null, TRUE);
			// masuk ke model :
			$this->Keluar->add($inputan);
		} else if (isset($_POST['ubah'])) {
			// echo "Proses Edit Data";
			$inputan = $this->input->post(null, TRUE);
			// masuk ke model :
			$this->Keluar->edit($inputan);
		}
		// masuk ke controller :
		redirect('keluar');
	}

	public function del($id = null)
	{
		// echo "Delete Data " . $id;
		$this->Keluar->del($id);
		redirect('keluar');
	}

}
