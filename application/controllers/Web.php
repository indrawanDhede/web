<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('Home/index');
        $this->load->view('template/footer');
    }
    public function about()
    {
        $this->load->view('template/header');
        $this->load->view('about/index');
        $this->load->view('template/footer');
    }

    public function visi()
    {
        $this->load->model('Visi_model');
        $data['visi'] = $this->Visi_model->getAll();

        $this->load->view('template/header');
        $this->load->view('visi/index', $data);
        $this->load->view('template/footer');
    }

    public function portfolio()
    {
        $this->load->view('template/header');
        $this->load->view('portofolio/index');
        $this->load->view('template/footer');
    }

    public function contact()
    {
        $this->load->view('template/header');
        $this->load->view('contact/index');
        $this->load->view('template/footer');
    }
}
