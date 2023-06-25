<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function getSuratCount() {
        $query = $this->db->get('tb_surat');
        return $query->num_rows();
    }

    public function getPenggunaCount() {
        $query = $this->db->get('tb_pengguna');
        return $query->num_rows();
    }

    public function getProsesCount() {
        $query = $this->db->get('tb_status');
        return $query->num_rows();
    }


}


?>