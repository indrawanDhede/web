<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Menu Home';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/home/index');
        $this->load->view('templates/footer');
    }
}
