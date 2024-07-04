<?php 

/**
 * 
 */
class Home_m extends CI_Model
{
	
	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		// if ($id != null) {
		// 	$this->db->where('id_buku',$id);
		// }
		$query = $this->db->get();
		// Another cara :
		//$query = $this->db->query("SELECT * FROM tb_buku");
		return $query;
	}
}
 ?>