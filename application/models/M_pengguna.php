<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function create_pengguna($data) {
        $this->db->insert('tb_pengguna', $data);
        return $this->db->insert_id();
    }

    public function get_pengguna_by_username($username) {
        $this->db->where('username', $username);
        return $this->db->get('tb_pengguna')->row();
    }

    public function get_pengguna_by_email($email) {
        $this->db->where('email', $email);
        return $this->db->get('tb_pengguna')->row();
    }

    public function get_pengguna_by_id($user_id) {
        $this->db->where('id_user', $user_id);
        return $this->db->get('tb_pengguna')->row();
    }

    public function update_pengguna($user_id, $data) {
        $this->db->where('id_user', $user_id);
        $this->db->update('tb_pengguna', $data);
    }

    public function get_all_pengguna() {
        return $this->db->get('tb_pengguna')->result();
    }



}


?>