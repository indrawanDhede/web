<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function getAllFakultas()
    {
        // $hasil = $this->db->query('SELECT * FROM fakultas')->result();
        $hasil = $this->db->get('fakultas');
        return $hasil->result();
    }

    public function simpanFakultas($fakultas)
    {

        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required|max_length[10]');

        if ($this->form_validation->run() == FALSE) {
            $hasil = [
                'error' => true,
                'fakultas' => form_error('fakultas', '<p class="mt-3 text-danger">', '</p>'),
            ];

            return $hasil;
        } else {
            $query = [
                'nama_fakultas' => $fakultas
            ];

            $this->db->insert('fakultas', $query);
            $hasil = [
                'error' => false
            ];
            return $hasil;
        }
    }

    public function getFakultasById($id)
    {
        $hasil = $this->db->get_where('fakultas', ['id_fakultas' => $id])->result();
        return $hasil;
    }


    public function updateData($id, $fakultas)
    {
        $query = [
            'nama_fakultas' => $fakultas
        ];

        $this->db->where('id_fakultas', $id);
        $this->db->update('fakultas', $query);
    }

    public function hapusData($id)
    {
        $hasil = $this->db->query("DELETE FROM fakultas WHERE id_fakultas = $id ");
        return $hasil;
    }
}
