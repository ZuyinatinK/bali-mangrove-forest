<?php

/**
 * User_model
 *
 * Model ini digunakan untuk mengelola data pengguna di database.
 */
class User_model extends CI_Model
{
    /**
     * Mengambil data pengguna berdasarkan role_id 1 dari tabel 'user'.
     *
     * @return array Array yang berisi data pengguna dengan role_id 1.
     */
    public function getUserByID(){
        $id = 1;
        // Mengambil data dari tabel 'user' dimana role_id = 1 dan mengembalikan sebagai array asosiatif
        return $this->db->get_where('user',['role_id'=> $id])->result_array();
    }

    /**
     * Mengambil data pengguna berdasarkan role_id 0 dari tabel 'user'.
     *
     * @return array Array yang berisi data pengguna dengan role_id 0.
     */
    public function getUserByID2(){
        $id = 0;
        // Mengambil data dari tabel 'user' dimana role_id = 0 dan mengembalikan sebagai array asosiatif
        return $this->db->get_where('user',['role_id'=> $id])->result_array();
    }
}