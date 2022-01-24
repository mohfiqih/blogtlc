<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function admin()
    {
        $this->load->view('login');
    }
    
    public function proses()
    {
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));
        $this->load->model('Model_login');
        $query =
            $this->Model_login->cek_login($username, $password);

        if ($query) {
            if ($query['level'] == 'admin') {
                redirect('beranda/dashboard', 'refresh');
            }else {
                redirect('user');
            }
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal login</div>');
            redirect('login/admin', 'refresh');
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login/admin');
    }
}
