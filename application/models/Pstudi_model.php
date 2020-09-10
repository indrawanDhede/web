<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pstudi_model extends CI_Model
{
    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('pstudi');
        $this->db->join('fakultas', 'fakultas.id_fakultas = pstudi.id_fakultas');
        $data = $this->db->get();
        return $data->result();
    }

    public function getPstudiById($id)
    {
        $this->db->select('*');
        $this->db->from('pstudi');
        $this->db->join('fakultas', 'fakultas.id_fakultas = pstudi.id_fakultas');
        $this->db->where('pstudi.id_pstudi', $id);
        $data = $this->db->get()->row();

        return $data;
    }

    public function simpanData($fakultas, $pstudi)
    {
        $query = [
            'nama_pstudi' => $pstudi,
            'id_fakultas' => $fakultas
        ];

        $data = $this->db->insert('pstudi', $query);
        return $data;
    }

    public function hapusData($id)
    {
        $this->db->where('id_pstudi', $id);
        $data = $this->db->delete('pstudi');

        return $data;
    }

    public function getAllFakultas()
    {
        $data = $this->db->get('fakultas')->result();
        return $data;
    }
}
