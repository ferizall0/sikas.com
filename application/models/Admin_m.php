<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
}
?>