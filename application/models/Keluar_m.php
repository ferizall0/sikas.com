<?php 

/**
 * 
 */
class Keluar_m extends CI_Model
{
	
	public function get($id = 'Keluar')
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('jenis',$id);
		$query = $this->db->get();
		// Another cara :
		//$query = $this->db->query("SELECT * FROM tb_buku");
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'kode' => $data['kode'],
			'keterangan' => $data['ket'],
			'tgl' => $data['tgl'],
			'jumlah' => 0,
			'jenis' => 'Keluar',
			'keluar' => $data['jml'],
		);
		$this->db->insert('transaksi',$param);
	}

	public function edit($data)
	{
		$param = array(
			'kode' => $data['kode'],
			'keterangan' => $data['ket'],
			'tgl' => $data['tgl'],
			'keluar' => $data['jml'],
		);
		$this->db->set($param);
		$this->db->where('kode', $data['kode']);
		$this->db->update('transaksi');
	}

	public function del($id)
	{
		$this->db->where('kode',$id);
		$this->db->delete('transaksi');
	}
}
 ?>