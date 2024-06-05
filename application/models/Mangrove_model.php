<?php

/**
 * Mangrove_model
 *
 * Model ini digunakan untuk mengelola data mangrove di database.
 */
class Mangrove_model extends CI_Model
{
    /**
     * Mengambil semua data mangrove dari tabel 'tb_bali'.
     *
     * @return array Array yang berisi semua data mangrove.
     */
    public function getAllMangrove()
    {
        // Mengambil semua baris dari tabel 'tb_bali' dan mengembalikan sebagai array asosiatif
        return $this->db->get('tb_bali')->result_array();    
    }

    /**
     * Menambah data mangrove baru ke dalam tabel 'tb_bali'.
     */
    public function tambahDataMangrove()
    {
        // Mengambil input dari form dan menyimpan dalam variabel
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $latitude = $this->input->post('latitude', true);
        $longitude = $this->input->post('longitude', true);

        // Membuat array data untuk dimasukkan ke database
        $data = [
            "nama" => $nama,
            "alamat" => $alamat,
            "latitude" => $latitude,
            "longitude" => $longitude
        ];

        // Menambahkan data ke tabel 'tb_bali'
        $this->db->insert('tb_bali', $data);
    }

    /**
     * Mengambil data mangrove dari tabel 'tb_bali'.
     *
     * @return object Hasil query berupa objek yang berisi semua data mangrove.
     */
    public function getDataMangrove()  
    {
        // Memilih semua kolom dari tabel 'tb_bali'
        $this->db->select('*');
        $this->db->from('tb_bali');
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Mengambil data mangrove berdasarkan ID dari tabel 'tb_bali'.
     *
     * @param int|null $id ID dari data mangrove yang ingin diambil.
     * @return object Hasil query berupa objek yang berisi data mangrove yang sesuai ID.
     */
    public function getMangroveByID($id){
        $this->db->from('tb_bali');
        if($id != null) {
            // Mencari data berdasarkan ID jika ID tidak null
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    /**
     * Menghapus data mangrove dari tabel 'tb_bali' berdasarkan ID.
     *
     * @param int $id ID dari data mangrove yang akan dihapus.
     */
    public function hapusDataMangrove($id){
        // Menghapus data dari tabel 'tb_bali' berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('tb_bali');
    }
    
    /**
     * Mengedit data mangrove dalam tabel 'tb_bali' berdasarkan input dari form.
     *
     * @param array $post Data yang diedit yang diambil dari input form.
     */
    public function editDataMangrove($post){
        // Membuat array data untuk diupdate ke database
        $params['nama'] = $post['nama'];
        $params['alamat'] = $post['alamat'];
        $params['latitude'] = $post['latitude'];
        $params['longitude'] = $post['longitude'];
        
        // Mengupdate data di tabel 'tb_bali' berdasarkan ID
        $this->db->where('id', $post['id']);
        $this->db->update('tb_bali', $params);    
    }
}