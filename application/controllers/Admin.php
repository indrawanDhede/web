<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('logout');
        }
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/home/index');
        $this->load->view('templates/footer');
    }
}
