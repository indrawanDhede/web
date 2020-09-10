<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('portofolio')->result();
    }

    public function simpan_data($namaFotoBaru)
    {
        $query = [
            'title' => $this->input->post('title'),
            'detail' => $this->input->post('detail'),
            'foto' => $namaFotoBaru
        ];
        $this->db->insert('portofolio', $query);
    }

    public function update_data($namaFoto)
    {
        $query = [
            'title' => $this->input->post('title'),
            'detail' => $this->input->post('detail'),
            'foto' => $namaFoto
        ];
        $this->db->where('id_porto', $this->input->post('id_porto'));
        $this->db->update('portofolio', $query);
    }

    public function delete_data($id)
    {
        $this->db->delete('portofolio', ['id_porto' => $id]);
    }
}
