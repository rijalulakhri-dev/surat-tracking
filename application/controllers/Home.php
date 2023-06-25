<?php 

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
        $this->load->model('Ex_model', 'E');
        
        if ($this->session->userdata('status_login') != true) {
            
            redirect('auth');
        }    
    }

    public function index(){
        $piket = 1;
        $surat = 0;
        $pimpinan = 0;
        $callDataSurat = $this->E->logicPartSurat($surat,$piket,$pimpinan);
        $data['countSurat'] = $callDataSurat->num_rows();
        $data['setDataSurat'] = $callDataSurat->result();
        $data['surat_masuk'] = $this->M_home->getSuratCount();
        $data['jumlah_pengguna'] = $this->M_home->getPenggunaCount();
        $data['surat_proses'] = $this->M_home->getProsesCount();

        if ($this->session->userdata('level_access') == 1) {

            $data['title'] = 'Dashboard Piket';
            $this->load->view('partials/header', $data);
            $this->load->view('piket/index');
            $this->load->view('partials/footer');
        
        } elseif ($this->session->userdata('level_access') == 2 ) {

            $data['title'] = 'Dashboard Persuratan';
            $this->load->view('partials/header', $data);
            $this->load->view('dashboard/index');
            $this->load->view('partials/footer');
            
        } elseif ($this->session->userdata('level_access') == 3 ) {
            
            $data['title'] = 'Dashboard Pimpinan';
            $this->load->view('partials/header', $data);
            $this->load->view('pimpinan/index');
            $this->load->view('partials/footer');
            
        } elseif ($this->session->userdata('level_access') == 4 ) {
                        
            $data['title'] = 'Admin';
            $this->load->view('partials/header', $data);
            $this->load->view('admin/index');
            $this->load->view('partials/footer');

        }
    }       
}


?>