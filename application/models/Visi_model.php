<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('visi_misi')->result();
    }
    public function simpan_data($visi, $misi)
    {
        $query = [
            'visi' => $visi,
            'misi' => $misi
        ];

        $this->db->insert('visi_misi', $query);
    }

    public function getById($id)
    {
        $data = $this->db->get_where('visi_misi', ['id_visi' => $id])->row();
        return $data;
    }

    public function update_data()
    {
        $visi = $this->input->post('visi', true);
        $misi = $this->input->post('misi', true);
        $query = [
            'visi' => $visi,
            'misi' => $misi
        ];
        $this->db->where('id_visi', $this->input->post('id_visi'));
        $this->db->update('visi_misi', $query);
    }

    public function delete_data($id)
    {
        $this->db->delete('visi_misi', ['id_visi' => $id]);
    }
}
