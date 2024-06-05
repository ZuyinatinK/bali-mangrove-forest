<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller TabelUser
 *
 * Controller ini mengelola data pengguna, termasuk menampilkan data pengguna.
 */
class TabelUser extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat library `form_validation` dan memeriksa apakah pengguna sudah login.
     */
    public function __construct()
    {
        parent:: __construct();
        // Memeriksa apakah pengguna sudah login. Jika belum, alihkan ke halaman login.
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
    }

    /**
     * Halaman Index
     *
     * Menampilkan semua data pengguna.
     *
     * @return void
     */
    public function index()
    {
        $this->load->model('User_model');

        $data['title'] = 'Users - Visit Bali’s Mangrove Forest';
        
        // Mengambil data pengguna dari model
        $data['user3'] = $this->User_model->getUserByID();
        $data['user2'] = $this->User_model->getUserByID2();
        // Mengambil data pengguna yang sedang login
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->view('user', $data);
    }
}