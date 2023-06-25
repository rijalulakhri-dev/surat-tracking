<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Ex_model extends CI_Model 
{
    public function select()
    {

    }   
    
    function callAnonymousFun() {
        $this->db->select('*');
        $this->db->join('tb_surat', 'tb_surat.id_surat = tb_status.surat_id');
        return $this->db->get('tb_status');
        // return;s
    }

    function countPartSurat() {
        $this->db->select('*');
        $this->db->join('tb_surat', 'tb_surat.id_surat = tb_status.surat_id');
        $this->db->where('tb_status.piket', 1);
        return $this->db->get('tb_status');
    }

    function logicPartSurat($surat,$piket,$pimpinan) {
        $this->db->select('*');
        $this->db->join('tb_surat', 'tb_surat.id_surat = tb_status.surat_id');
        $this->db->where('tb_status.piket', $piket);
        $this->db->where('tb_status.persuratan', $surat);
        $this->db->where('tb_status.pimpinan', $pimpinan);
        $this->db->order_by('tb_status.tanggal_update', 'desc');
        
        return $this->db->get('tb_status');
        
        
    }
                        
}


/* End of file Ex_model.php and path \application\models\Ex_model.php */
