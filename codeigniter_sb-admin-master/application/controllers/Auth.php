<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_m');
    }

    public function index()
    {
        $data['data'] = false;

        $data['judul'] = 'Login User';
        $this->load->view('auth/template_auth/header', $data);
        $this->load->view('auth/index', $data);
        $this->load->view('auth/template_auth/footer', $data);
    }

    public function auth_admin()
    {
        $this->form_validation->set_rules('nip', 'NIP Pegawai', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = false;

            $data['judul'] = 'Login';
            $this->load->view('auth/template/header', $data);
            $this->load->view('auth/user', $data);
            $this->load->view('auth/template/footer');
        }

        $nip = $this->input->post('nip');
        $password =  md5($this->input->post('password'));
        $cek = $this->auth_m->login($nip, $password);
        if ($cek == true) {

            foreach ($cek as $row);
            $this->session->set_userdata('nip', $row->nip);
            $this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
            $this->session->set_userdata('id_dep', $row->id_dep);
            $this->session->set_userdata('level', $row->level);
            $this->session->set_userdata('mess', $row->mess);

            redirect('user_karyawan');
        } else {
            $data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
            $data['judul'] = 'Login';
            $this->load->view('auth/template_auth/header', $data);
            $this->load->view('auth/user', $data);
            $this->load->view('auth/template_auth/footer');
        }
    }
}
