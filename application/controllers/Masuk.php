<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Masuk_m', 'Masuk');
	}

	public function index()
	{
		// code untuk menampilkan semua data :
		$query = $this->Masuk->get();

		$data = array(
			'header' => 'Data Kas Masuk',
			'no' => 1,
			'total' => 0,
		);

		$data['masuk'] = $query->result();

		$this->load->view('template/_header', $data);
		$this->load->view('masuk', $data);
		$this->load->view('template/_footer');
	}

	public function proses()
	{
		if (isset($_POST['simpan'])) {
			$inputan = $this->input->post(null, TRUE);
			// masuk ke model :
			$this->Masuk->add($inputan);
		} else if (isset($_POST['ubah'])) {
			// echo "Proses Edit Data";
			$inputan = $this->input->post(null, TRUE);
			// masuk ke model :
			$this->Masuk->edit($inputan);
		}
		// masuk ke controller :
		redirect('masuk');
	}

	public function del($id = null)
	{
		// echo "Delete Data " . $id;
		$this->Masuk->del($id);
		redirect('masuk');
	}

}
