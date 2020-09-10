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
}
