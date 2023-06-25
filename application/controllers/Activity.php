<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

    public function user_list()
    {
        if ($this->session->userdata('level_access') !== 4) {
            redirect('Home');
        }

        $this->load->model('M_pengguna');
        
        $data['title'] = 'Activity';
        $data['pengguna'] = $this->M_pengguna->get_all_pengguna(); // Mengambil data pengguna dari model
        $this->load->view('partials/header', $data);
        $this->load->view('activity/index', $data); // Mengirim data $data ke halaman view
        $this->load->view('partials/footer');
    }
    

}

?>