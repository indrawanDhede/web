<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('contact')->result();
    }
    public function simpan_data()
    {
        $email = $this->input->post('email', true);
        $telp = $this->input->post('telp', true);
        $alamat = $this->input->post('alamat', true);
        $jam_kerja = $this->input->post('jam_kerja', true);
        $query = [
            'email' => $email,
            'telp' => $telp,
            'alamat' => $alamat,
            'jam_kerja' => $jam_kerja
        ];

        $this->db->insert('contact', $query);
    }

    public function getById($id)
    {
        $data = $this->db->get_where('contact', ['id_contact' => $id])->row();
        return $data;
    }

    public function update_data()
    {
        $email = $this->input->post('email', true);
        $telp = $this->input->post('telp', true);
        $alamat = $this->input->post('alamat', true);
        $jam_kerja = $this->input->post('jam_kerja', true);
        $query = [
            'email' => $email,
            'telp' => $telp,
            'alamat' => $alamat,
            'jam_kerja' => $jam_kerja
        ];
        $this->db->where('id_contact', $this->input->post('id_contact'));
        $this->db->update('contact', $query);
    }

    public function delete_data($id)
    {
        $this->db->delete('contact', ['id_contact' => $id]);
    }
}
