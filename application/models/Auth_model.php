<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function setInsert($data)
    {
        $this->db->insert('user', $data);
    }
}
