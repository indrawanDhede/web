<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode_model extends CI_Model
{
    public function getAllPeriode()
    {
        $hasil = $this->db->query('SELECT * FROM periode');

        return $hasil->result();
    }

    public function insert($tahun, $periode)
    {
        $data = [
            'tahun' => $tahun,
            'nama_periode' => $periode
        ];

        $hasil = $this->db->insert('periode', $data);

        return $hasil;
    }

    public function hapus($id)
    {
        $hasil = $this->db->query("DELETE FROM periode WHERE id_periode = $id ");
        return $hasil;
    }

    public function getData($id)
    {
        $hasil = $this->db->query("SELECT * FROM periode WHERE id_periode = $id ");

        return $hasil->result();
    }

    public function ubahPeriode($id, $tahun, $periode)
    {
        $query = [
            'tahun' => $tahun,
            'nama_periode' => $periode
        ];

        $this->db->where('id_periode', $id);
        $hasil = $this->db->update('periode', $query);
        return $hasil;
    }
}
