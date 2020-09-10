<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PenerimaanMhs_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function filter()
    {
        $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
        $limit = $_POST['length']; // Ambil data limit per page
        $start = $_POST['start']; // Ambil data start
        $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
        $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
        $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

        $this->db->like('nim', $search);
        $this->db->or_like('nama', $search);
        $this->db->or_like('alamat', $search);
        $this->db->or_like('telp', $search);
        $this->db->or_like('email', $search);
        $this->db->or_like('tgl_masuk', $search);
        $this->db->order_by($order_field, $order_ascdesc);
        $this->db->limit($limit, $start);
        $this->db->order_by('nim', 'desc');
        return $this->db->get('students')->result_array();
    }
    public function count_all()
    {
        return $this->db->count_all('students');
    }
    public function count_filter()
    {
        $search = $_POST['search']['value'];

        $this->db->like('nim', $search);
        $this->db->or_like('nama', $search);
        $this->db->or_like('alamat', $search);
        $this->db->or_like('telp', $search);
        $this->db->or_like('email', $search);
        $this->db->or_like('tgl_masuk', $search);
        $this->db->order_by('nim', 'desc');
        return $this->db->get('students')->num_rows();
    }

    public function tambahData()
    {
        $this->db->select_max('nim');
        $students = $this->db->get('students')->row();
        $nim = (intval($students->nim) + 1);
        $tgl_masuk = date('Y-m-d');

        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $telp = $this->input->post('telp', true);
        $email = $this->input->post('email', true);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'error' => true,
                'error_nama' => form_error('nama', '<p class=" mt-3 text-danger">', '</p>'),
                'error_alamat' => form_error('alamat', '<p class=" mt-3 text-danger">', '</p>'),
                'error_telp' => form_error('telp', '<p class=" mt-3 text-danger">', '</p>'),
                'error_email' => form_error('email', '<p class=" mt-3 text-danger">', '</p>')
            ];
            return $data;
        } else {
            $query = [
                'nim' => $nim,
                'nama' => $nama,
                'alamat' => $alamat,
                'telp' => $telp,
                'email' => $email,
                'tgl_masuk' => $tgl_masuk,
                'foto' => 'default.jpg'
            ];
            $sukses = $this->db->insert('students', $query);
            if (!empty($sukses)) {
                $data = [
                    'error' => false,
                    'pesan' => 'berhasil'
                ];
                return $data;
            } else {
                $data = [
                    'error' => false,
                    'pesan' => 'gagal'
                ];
                return $data;
            }
        }
    }

    public function editData()
    {
        $id = $this->input->post('id', true);
        $data = $this->db->get_where('students', ['id' => $id])->row_array();
        return $data;
    }

    public function updateData()
    {
        $id = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $telp = $this->input->post('telp', true);
        $email = $this->input->post('email', true);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'error' => true,
                'error_nama' => form_error('nama', '<p class=" mt-3 text-danger">', '</p>'),
                'error_alamat' => form_error('alamat', '<p class=" mt-3 text-danger">', '</p>'),
                'error_telp' => form_error('telp', '<p class=" mt-3 text-danger">', '</p>'),
                'error_email' => form_error('email', '<p class=" mt-3 text-danger">', '</p>')
            ];
            return $data;
        } else {
            $query = [
                'nama' => $nama,
                'alamat' => $alamat,
                'telp' => $telp,
                'email' => $email
            ];
            $this->db->where('id', $id);
            $sukses = $this->db->update('students', $query);
            if (!empty($sukses)) {
                $data = [
                    'error' => false,
                    'pesan' => 'berhasil'
                ];
                return $data;
            } else {
                $data = [
                    'error' => false,
                    'pesan' => 'gagal'
                ];
                return $data;
            }
        }
    }

    public function hapusData()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $sql = $this->db->delete('students');
        if (!empty($sql)) {
            $data = [
                'message' => 'Data berhasil dihapus!'
            ];
        } else {
            $data = [
                'message' => 'Data gagal dihapus!'
            ];
        }
        return $data;
    }
}
