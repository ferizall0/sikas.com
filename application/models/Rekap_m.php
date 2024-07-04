<?php 

class Rekap_m extends CI_Model
{
	
	public function get()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->order_by('tgl', 'asc');
		$query = $this->db->get();
		return $query;
	}
}
 ?>