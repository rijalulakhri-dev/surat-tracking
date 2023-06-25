<?php 

class Surat extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_surat');
        $this->load->model('Ex_model', 'E');
        
        if ($this->session->userdata('status_login') != true) {
            
            redirect('auth');
        }    
    }

    public function index(){
  
        $surat = 1;
        $piket = 0;
        $pimpinan = 0;
        $data['countSurat'] = $this->E->logicPartSurat($surat,$piket,$pimpinan)->num_rows();

        var_dump($data['countSurat']);
        die();
        $data['title'] = 'Form Tambah Surat';
        $data['suratStatus'] = $this->M_surat->getSuratStatus();
        $this->load->view('partials/header', $data);
        $this->load->view('surat/index', $data);
        $this->load->view('partials/footer');
        
    }

    public function tambahSurat(){

        // Ambil data dari form
        $nomor_surat = $this->input->post('nomor_surat');
        $judul_surat = $this->input->post('judul_surat');
        $tanggal_surat = $this->input->post('tanggal_surat');
        // $status_surat = $this->input->post('status_surat');
        $keterangan_surat = $this->input->post('keterangan_surat');
        $lampiran = $_FILES['lampiran']['tmp_name'];

        // Panggil model untuk menyimpan data
        $this->M_surat->tambahSurat($nomor_surat, $judul_surat, $tanggal_surat, $keterangan_surat, $lampiran,$setAccess);

        // Redirect atau lakukan operasi lainnya setelah data terkirim
        redirect('surat');
    }


    public function getSuratAll(){
        $test = $this->M_surat->getSuratStatus();
        
        echo "<pre>";
        var_dump($test);
        echo "</pre>";
        
    }

    public function go($go, $ids){
        $this->M_surat->sampelGo($go, $ids);
        redirect('laporan');
    }



}

?>