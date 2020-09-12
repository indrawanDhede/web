<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render_view($path, $data)
    {
        $this->load->model('Contact_model');
        $data['contact'] = $this->Contact_model->getAll();
        $this->load->view('template/header', $data);
        $this->load->view($path, $data);
        $this->load->view('template/footer', $data);
    }

    public function index()
    {
        $path = 'Home/index';
        $data['title'] = 'Home';
        $this->load->model('Visi_model');
        $data['visi'] = $this->Visi_model->getAll();

        $this->render_view($path, $data);
    }

    public function about()
    {
        $path = 'about/index';
        $data['title'] = 'About';
        $this->load->model('About_model');
        $data['about'] = $this->About_model->getAll();

        $this->render_view($path, $data);
    }

    public function services()
    {
        $path = 'services/index';
        $data['title'] = 'Services';
        $this->load->model('Service_model');
        $data['services'] = $this->Service_model->getAll();

        $this->render_view($path, $data);
    }

    public function portofolio()
    {
        $path = 'portofolio/index';
        $data['title'] = 'Portfolio';
        $this->load->model('Portofolio_model');
        $data['portofolio'] = $this->Portofolio_model->getAll();

        $this->render_view($path, $data);
    }

    public function contact()
    {
        $path = 'contact/index';
        $data['title'] = 'Contact';
        $this->load->model('Contact_model');
        $data['contact'] = $this->Contact_model->getAll();

        $this->render_view($path, $data);
    }
}
