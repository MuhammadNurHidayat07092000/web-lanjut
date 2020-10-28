<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_blog');
    }

    public function index()
    {
        $data['isi'] = $this->m_blog->getAll();
        $this->load->view('blog/v_tampil', $data);
    }
}