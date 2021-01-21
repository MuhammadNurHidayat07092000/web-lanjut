<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_blog');
    }

    public function index()
    {
        $this->load->view('blog/v_awal');
    }

    public function tampilData()
    {
        $data['isi'] = $this->m_blog->getAll();
        $this->load->view('blog/v_tampil', $data);
    }

    public function tambahData()
    {
        $this->load->view('blog/v_tambahData');
    }

    public function prosesTambah()
    {
        $judul    = $this->input->post('judul');
        $isi      = $this->input->post('isi');
        $penulis  = $this->input->post('penulis');

        $data     = array(
            'judul'   => $judul,
            'isi'     => $isi,
            'penulis' => $penulis
        );

        $this->m_blog->insertData($data);
        redirect('Blog/tampilData');
    }

    public function hapusData($id)
    {
        $where = array('id' => $id);
        $this->m_blog->deleteData($where, 'blog');
        redirect('blog/tampilData');
    }

    public function vUbahData($id)
    {
        $where = array('id' => $id);
        $data['blog'] = $this->m_blog->vEditData($where, 'blog')->result();

        $this->load->view('blog/v_edit', $data);
    }

    public function ubahData()
    {
        $id = $this->input->post('id');
        $judul    = $this->input->post('judul');
        $isi      = $this->input->post('isi');
        $penulis  = $this->input->post('penulis');

        $data     = array(
            'judul'   => $judul,
            'isi'     => $isi,
            'penulis' => $penulis
        );

        $where = array('id' => $id);
        $this->m_blog->updateData($where, $data, 'blog');
        redirect('blog/tampilData');
    }
}
