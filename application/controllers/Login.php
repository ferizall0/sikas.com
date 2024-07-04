<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_m');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->Admin_m->check_login($username, $password);

        if ($result) {
            $this->session->set_userdata('logged_in', TRUE);
            $this->session->set_userdata('username', $username);
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Invalid Username or Password');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        redirect('login');
    }
}
?>