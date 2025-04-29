<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {
    
    // Mengambil semua data dosen
    public function get_all_dosen() {
        return $this->db->get('dosen')->result_array(); // Mengembalikan hasil sebagai array
    }
    
    // Menambahkan data dosen
    public function insert_dosen($data) {
        return $this->db->insert('dosen', $data);
    }
    
    // Menghapus data dosen berdasarkan ID
    public function delete_dosen($id) {
        return $this->db->delete('dosen', ['id' => $id]);
    }
    
    // Mengambil data dosen berdasarkan ID
    public function get_dosen_by_id($id) {
        return $this->db->get_where('dosen', ['id' => $id])->row_array();
    }
    
    // Memperbarui data dosen berdasarkan ID
    public function update_dosen($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('dosen', $data);
    }
}