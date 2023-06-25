<?php 

class Progress extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('status_login') != true) {
            
            redirect('auth');
            
        }    
    }
    

    public function index(){

        // untuk membatasi level akses
        if ($this->session->userdata('level_access') == 1 ) {
            redirect('Home');
        }
        
        $data['title'] = 'Progress';
        $this->load->view('partials/header', $data);
        $this->load->view('progress/index');
        $this->load->view('partials/footer');
        
        
    }

}


?>