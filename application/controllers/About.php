<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('logout');
        }
        $this->load->model('About_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Menu About';

        $data['data'] = $this->About_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/about/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/about/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $foto = $_FILES['foto']['name'];
            if (!$foto) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Upload gagal, Foto harus di isi.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                redirect('about');
            } else {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2048;
                $config['upload_path']   = './assets/img/team/';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                } else {
                    $namaFotoBaru = $this->upload->data('file_name');
                    $this->About_model->simpan_data($namaFotoBaru);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambahkan.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('about');
                }
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Form Tambah Data';
        $data['about'] = $this->db->get_where('about', ['id_about' => $id])->row();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/about/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $foto = $_FILES['foto']['name'];
            if (!$foto) {
                $namaFoto = $this->input->post('fotoLama');
            } else {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2048;
                $config['upload_path']   = './assets/img/team/';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                } else {
                    $namaFoto = $this->upload->data('file_name');
                }
            }

            $this->About_model->update_data($namaFoto);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambahkan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
            redirect('about');
        }
    }

    public function hapus($id)
    {
        $this->About_model->delete_data($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil dihapus.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
        redirect('about');
    }
}
