<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('about')->result();
    }

    public function simpan_data($namaFotoBaru)
    {
        $query = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $namaFotoBaru
        ];
        $this->db->insert('about', $query);
    }

    public function update_data($namaFoto)
    {
        $query = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $namaFoto
        ];
        $this->db->where('id_about', $this->input->post('id_about'));
        $this->db->update('about', $query);
    }

    public function delete_data($id)
    {
        $this->db->delete('about', ['id_about' => $id]);
    }
}
