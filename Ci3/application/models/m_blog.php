<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_blog extends CI_Model
{

    private $table = 'blog';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function insertData($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function vEditData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
