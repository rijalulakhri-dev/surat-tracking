<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $data['title'] = 'About';
        $this->load->view('partials/header', $data);
        $this->load->view('about/index');
        $this->load->view('partials/footer', $data);
        
    }

}

?>