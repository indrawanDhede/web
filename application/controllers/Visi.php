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

    public function tambah()
    {
        $visi = $this->input->post('visi', true);
        $misi = $this->input->post('misi', true);

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
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            redirect('visi');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit';
        $data['visi'] = $this->Visi_model->getById($id);

        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/visi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Visi_model->update_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diubah.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('visi');
        }
    }

    public function hapus($id)
    {
        $this->Visi_model->delete_data($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil dihapus.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
        redirect('visi');
    }
}
