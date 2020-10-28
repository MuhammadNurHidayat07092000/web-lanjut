<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_blog extends CI_Model {

    private $table = 'blog';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

}
