<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AllUser extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'All User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['usere'] = $this->M_users->getUsers();
        $this->load->view('template/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }
}
