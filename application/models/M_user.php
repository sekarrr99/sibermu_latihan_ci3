<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function save_user($data)
    {
        $this->db->insert('user', $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
