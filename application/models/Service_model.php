<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('service')->result();
    }

    public function simpan_data($namaFotoBaru)
    {
        $query = [
            'nama_service' => $this->input->post('nama_service'),
            'detail_service' => $this->input->post('detail_service'),
            'foto' => $namaFotoBaru
        ];
        $this->db->insert('service', $query);
    }

    public function update_data($namaFoto)
    {
        $query = [
            'nama_service' => $this->input->post('nama_service'),
            'detail_service' => $this->input->post('detail_service'),
            'foto' => $namaFoto
        ];
        $this->db->where('id_service', $this->input->post('id_service'));
        $this->db->update('service', $query);
    }

    public function delete_data($id)
    {
        $this->db->delete('service', ['id_service' => $id]);
    }
}
