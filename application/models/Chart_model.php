<?php

/**
 * Chart_model
 *
 * Model ini digunakan untuk mengambil data terkait dengan mangrove dari database.
 */
class Chart_model extends CI_Model
{   
    /**
     * Mengambil jumlah data mangrove.
     *
     * Metode ini menghitung jumlah baris dalam tabel `tb_bali` yang menyimpan data mangrove.
     *
     * @return int Jumlah baris dalam tabel `tb_bali`.
     */
    public function getJumlahMangrove(){
        // Mengambil jumlah baris dari tabel 'tb_bali' dan mengembalikan jumlah baris tersebut
        return $this->db->get('tb_bali')->num_rows();
    }
}