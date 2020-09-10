<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    var $table = "users"; // nama table
    var $select_column = ["id", "first_name", "last_name", "image"]; // nama field dari database
    var $order_column = [null, "first_name", "last_name", null, null]; // name field view yang ingin di sort

    function make_query()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        // query nyambung jika ada search
        if (isset($_POST["search"]["value"])) {
            $this->db->like("first_name", $_POST["search"]["value"]);
            $this->db->or_like("last_name", $_POST["search"]["value"]);
        }
        // query nyambung lagi jika ada order
        if (isset($_POST["order"])) {
            $this->db->order_by($this->order_column[$_POST['order'][0]['column']], $_POST['order'][0]['dir']);
        } else {
            $this->db->order_by('id', 'desc');
        }
    }

    function make_datatables()
    {
        $this->make_query();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST["length"], $_POST["start"]);
        }
        $query = $this->db->get();

        return $query->result();
    }

    function get_filtered_data()
    {
        $this->make_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_all_data()
    {
        return $this->db->count_all($this->table);
    }

    public function allData()
    {
        $users = $this->db->get('users');
        return $users->result_array();
    }
    function insert_data()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'error' => true,
                'error_firstName' => form_error('firstName', '<p class=" mt-3 text-danger">', '</p>'),
                'error_lastName' => form_error('lastName', '<p class=" mt-3 text-danger">', '</p>')
            ];
            return $data;
        } else {
            $query = [
                'first_name' => $this->input->post('firstName'),
                'last_name' => $this->input->post('lastName'),
                'image' => 'default.jpg'
            ];

            $this->db->insert($this->table, $query);
            $data = [
                'error' => false
            ];
            return $data;
        }
    }

    public function edit_data()
    {
        $this->db->where('id', $this->input->post('user_id'));
        $user = $this->db->get($this->table)->row_array();
        return $user;
    }

    public function update_data()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName2', 'First Name', 'required');
        $this->form_validation->set_rules('lastName2', 'Last Name', 'required');
        if ($this->form_validation->run() == false) {
            $data = [
                'error' => true,
                'error_firstName2' => form_error('firstName2', '<p class=" mt-3 text-danger">', '</p>'),
                'error_lastName2' => form_error('lastName2', '<p class=" mt-3 text-danger">', '</p>')
            ];
            return $data;
        } else {
            $query = [
                'first_name' => $this->input->post('firstName2'),
                'last_name' => $this->input->post('lastName2')
            ];

            $this->db->where('id', $this->input->post('user_id'));
            $this->db->update($this->table, $query);
            $data = [
                'error' => false
            ];
            return $data;
        }
    }

    public function hapus_data()
    {
        $this->db->where('id', $this->input->post('id_user'));
        $this->db->delete($this->table);
        $data = [
            'message' => 'Data berhasil di hapus!'
        ];
        return $data;
    }
}
