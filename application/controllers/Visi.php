<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('logout');
        }
        $this->load->model('Visi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Menu Visi';

        $data['data'] = $this->Visi_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/visi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_visi()
    {
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');

        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/visi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Visi_model->simpan_data($visi, $misi);
            redirect('visi');
        }
    }

    public function edit_visi()
    {
    }
}
