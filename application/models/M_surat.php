<?php 


class M_surat extends CI_Model {

    
    public function tambahSurat($nomor_surat, $judul_surat, $tanggal_surat, $keterangan_surat, $lampiran){
        $ecp = $this->session->userdata('level_access');
        $id_surat = 'SURAT_' . $nomor_surat . date('Ymd', strtotime($tanggal_surat));
        $unique_tiket = time();       
        
        // Cek apakah $nomor_surat tidak NULL
        if ($nomor_surat !== NULL) {
                
                $lampiranPath = '';
                if (isset($_FILES['lampiran']) && $_FILES['lampiran']['error'] === UPLOAD_ERR_OK) {
                    $lampiranPath = FCPATH . 'lampiran/' . $_FILES['lampiran']['name'];
                    move_uploaded_file($lampiran, $lampiranPath);
                }

                // Siapkan data untuk disimpan ke database
                $data = array(
                    'id_surat' => $id_surat,
                    'nomor_surat' => $nomor_surat,
                    'judul_surat' => $judul_surat,
                    'tanggal_surat' => $tanggal_surat,
                    'keterangan_surat' => $keterangan_surat,
                    'lampiran' => $lampiranPath
                );

                $status = array(
                    'unique_tiket' => $unique_tiket,
                    'surat_id' => $id_surat,
                    'piket' => 1,
                    'notifikasi' => $ecp,
                    'tanggal_update' => $tanggal_surat

                );

                $this->db->insert('tb_status', $status);
                
                // Simpan data ke tabel tb_surat
                $this->db->insert('tb_surat', $data);
                $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan!');

            } else {
                $this->session->set_flashdata('error', 'Nomor Surat tidak valid!');
            }
    
            redirect('surat');        
    }
    
    public function getSuratStatus() {
        $this->db->select('*');
        $this->db->join('tb_status', 'tb_status.surat_id = tb_surat.id_surat');
        $this->db->order_by('tb_status.tanggal_update', 'desc');
        $query = $this->db->get('tb_surat');
        return $query->result();
    }

    public function getAllSurat() {
        // Query untuk mengambil semua data dari tabel tb_surat
        $query = $this->db->get('tb_surat');
        return $query->result_array();
    }

    public function sampelGo($set, $ids){
        switch ($set) {
            case '1':
                $data['piket'] = 1; 
                $this->db->where('unique_tiket', $ids);
                $this->db->update('tb_status', $data);
                return;
                break;
            case '2':
                $data['persuratan'] = 1; 
                $this->db->where('unique_tiket', $ids);
                $this->db->update('tb_status', $data);
                return;
                break;
            
            case '3':
                $data['pimpinan'] = 1; 
                $this->db->where('unique_tiket', $ids);
                $this->db->update('tb_status', $data);
                return;
                break;
                // coba
            case '4':
                $data['tembusan'] = 1;
                $this->db->where('unique_tiket', $ids);
                $this->db->update('tb_status', $data);
                break;
            default:
                # code...
                break;
        }
    }

    public function hapusSurat($id_surat){
        
        $this->db->where('id_surat', $id_surat);
        $this->db->delete('tb_surat');
   
    }

    
    

    
    
}

?>