<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah_model extends CI_Model {

    // Mengambil semua data mata kuliah
    public function get_all_matakuliah() {
        return $this->db->get('matakuliah')->result_array(); // Mengembalikan hasil sebagai array
    }

    // Menambahkan data mata kuliah
    public function insert_matakuliah($data) {
        return $this->db->insert('matakuliah', $data);
    }

    // Menghapus data mata kuliah berdasarkan kode
    public function delete_matakuliah($kode_matakuliah) {
        return $this->db->delete('matakuliah', ['kode_matakuliah' => $kode_matakuliah]);
    }

    // Mengambil data mata kuliah berdasarkan kode
    public function get_matakuliah_by_kode($kode_matakuliah) {
        return $this->db->get_where('matakuliah', ['kode_matakuliah' => $kode_matakuliah])->row_array();
    }

    // Memperbarui data mata kuliah berdasarkan kode
    public function update_matakuliah($kode_matakuliah, $data) {
        $this->db->where('kode_matakuliah', $kode_matakuliah);
        return $this->db->update('matakuliah', $data);
    }
}
