<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model('jabatan_m');
        // $this->load->model('pegawai_m');
    }

    public function index()
    {
        $data['level_akun'] = 'kepala_gs';
        $data['nama'] = 'Admin Kambing';
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
}
