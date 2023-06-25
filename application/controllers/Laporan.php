<?php 

class Laporan extends CI_Controller {
    
    public function __construct()
    {
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

        $data['title'] = 'Daftar Laporan';

        $this->load->model('M_surat');

        // Ambil data dari tabel tb_surat
        $data['surat'] = $this->M_surat->getSuratStatus();
        
        // echo "<pre>";
        // var_dump($data['surat']);
        // echo "</pre>";
        
        // $data['surat'] = $this->M_surat->getSuratStatus();

        $this->load->view('partials/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('partials/footer');
        
    }

    public function hapus($id_surat){
        $this->load->model('M_surat');
        $this->M_surat->hapusSurat($id_surat);
        
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
        
        redirect('laporan');
    }    
    
    public function progress($id_surat) {
        
        $data['title'] = 'Progress Surat';

        // $this->load->model('M_surat');
        // $data['suratData'] = $this->M_surat->getAllSurat();   
        $this->load->model('M_surat');

        // Ambil data dari tabel tb_surat
        $data['surat'] = $this->M_surat->getSuratStatus(); 

        $this->load->view('partials/header', $data);
        $this->load->view('laporan/progress',$data);
        $this->load->view('partials/footer');
        
    }

}



?>