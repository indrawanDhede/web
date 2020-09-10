<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Penerimaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('PenerimaanMhs_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Penerimaan Mahasiswa';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/penerimaan/index');
        $this->load->view('templates/footer');
    }

    public function view()
    {
        $sql_total = $this->PenerimaanMhs_model->count_all(); // Panggil fungsi count_all pada SiswaModel
        $sql_data = $this->PenerimaanMhs_model->filter(); // Panggil fungsi filter pada SiswaModel
        $sql_filter = $this->PenerimaanMhs_model->count_filter(); // Panggil fungsi count_filter pada SiswaModel
        $data = array(
            'draw' => intval($_POST['draw']), // Ini dari datatablenya
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function tambah()
    {
        $data = $this->PenerimaanMhs_model->tambahData();
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function edit()
    {
        $data = $this->PenerimaanMhs_model->editData();
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function update()
    {
        $data = $this->PenerimaanMhs_model->updateData();
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function hapus()
    {
        $data = $this->PenerimaanMhs_model->hapusData();
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
