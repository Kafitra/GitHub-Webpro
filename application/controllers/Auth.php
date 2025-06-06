<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('template');
        }

        $this->load->view('auth/login');
    }

    public function login_action() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password')); 

        $user = $this->User_model->get_user($username, $password);

        if ($user) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username,
                'logged_in' => true
            ]);
            redirect('page');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function register() {
        $this->load->view('auth/register');
    }

    public function register_action() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password')); // gunakan md5 di sini

        $existing = $this->db->get_where('users', ['username' => $username])->row();
        if ($existing) {
            $this->session->set_flashdata('error', 'Username sudah digunakan');
            redirect('auth/register');
            return;
        }

        $this->db->insert('users', [
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
        
        $this->session->set_flashdata('success', 'Registrasi berhasil. Silakan login.');
        redirect('auth/login');
        
    }
}