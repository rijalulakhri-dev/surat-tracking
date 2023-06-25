<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_pengguna');
    }

    public function index()
    {
        $this->load->view('user/login');
    }
    
    public function registration()
    {
        $this->load->view('user/registration');
    }

    public function prosesLogin(){
        $this->ruleLogin();
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($this->form_validation->run() == false) {
            $this->login();
        } else {
            $pengguna = $this->M_pengguna->get_pengguna_by_email($email);

            if ($pengguna) {

                if ($pengguna->status_aktivasi == 0) {
                    // Akun belum diaktifasi oleh admin
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda belum diaktifasi oleh admin. Harap tunggu hingga akun Anda diaktifkan.</div>');
                    redirect('auth');
                }

                if (password_verify($password, $pengguna->password)) {

                    $data = [
                        'email' => $pengguna->email,
                        'status_login' => TRUE,
                    ];

                    $access = $pengguna->level_access;
                    switch ($access) {
                        case 'piket':
                            $data['level_access'] = 1;
                            break;
                        case 'persuratan':
                            $data['level_access'] = 2; 
                            break;
                        case 'pimpinan':
                            $data['level_access'] = 3; 
                            break;
                        case 'admin':
                            $data['level_access'] = 4; 
                            break;
                    }


                    $this->session->set_userdata($data);
                    $this->session->set_userdata('username', $pengguna->username);

                    redirect('Home');
                    
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar.</div>');
                redirect('auth');
            }
        }
    }

    public function login(){
    // ...

    $pengguna = $this->M_pengguna->get_pengguna_by_username($username);
    if (!$pengguna) {
        // Pengguna tidak ditemukan
        // Berikan pesan atau tindakan sesuai kebutuhan, misalnya:
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ditemukan.</div>');
        // Redirect ke halaman login atau ke halaman lain yang sesuai
        redirect('auth/login');
    } else {
        if ($pengguna->status_aktivasi == 0) {
            // Akun belum diaktifkan oleh admin
            // Berikan pesan atau tindakan sesuai kebutuhan, misalnya:
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda belum diaktifasi oleh admin. Harap tunggu hingga akun Anda diaktifkan.</div>');
            // Redirect ke halaman login atau ke halaman lain yang sesuai
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda sudah di aktifkan. Silahkan masuk.</div>');
        }
    }

    // ...
}


    private function ruleLogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', array(
            'required' => '%s you entered is wrong.'
        ));

        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s you entered is wrong.'
        ));
    }

    public function proses()
    {
        $this->rule();
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $level_access = $this->input->post('level_access');

        if ($this->form_validation->run() == false) {
            $this->registration();
        } else {

            $data = [
                'username'              => $username,
                'email'                 => $email,
                'password'              => password_hash($password, PASSWORD_DEFAULT),
                'nama_lengkap'          => empty($nama) ? $username : $nama,
                'level_access'          => $level_access,
                'status_aktivasi'       => 0 // Setel status akun menjadi tidak aktif saat pertama kali mendaftar
            ];

            $user_id = $this->M_pengguna->create_pengguna($data);

            // Kirim email ke admin untuk meminta persetujuan
            // ...

            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Selamat! Akun anda telah dibuat. Harap tunggu persetujuan admin.</div>');
            redirect('auth');
        }
    }

    private function rule()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_pengguna.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password1', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('level_access', 'Level Access', 'required'); 
    }

    public function logout()
    {
        
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda telah keluar!</div>');
        redirect('auth');
        $this->session->sess_destroy();
    }

    public function activateAccount($user_id)
    {
        // Cek apakah pengguna dengan ID tersebut ada
        $pengguna = $this->M_pengguna->get_pengguna_by_id($user_id);
        if (!$pengguna) {
            // Jika pengguna tidak ditemukan, mungkin tampilkan pesan error atau redirect ke halaman yang sesuai
            redirect('activity/user_list');
        }
    
        // Lakukan tindakan aktivasi akun pengguna
        $data = array(
            'status_aktivasi' => 1 // Misalnya, 1 untuk status aktif dan 0 untuk status menunggu aktivasi
        );
        $this->M_pengguna->update_pengguna($user_id, $data);
    
        // Setelah mengaktivasi akun, Anda dapat mengirimkan notifikasi atau pesan ke pengguna, misalnya melalui email
    
        // Redirect atau tampilkan pesan sukses
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil di aktifkan</div>');
        redirect('activity/user_list');
    }

    public function user_list(){
        $data['pengguna'] = $this->M_pengguna->get_all_pengguna(); // Mendapatkan semua pengguna dari database
        $this->load->view('activity/user_list', $data); // Menampilkan view dengan data pengguna
    }

    
}
?>
