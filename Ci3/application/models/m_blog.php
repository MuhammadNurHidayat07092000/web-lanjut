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
        return $this->db->insert($this->table, $data);
    }
}
