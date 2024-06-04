<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Dashboard
 *
 * Controller ini berfungsi untuk menangani tampilan dashboard dan profil pengguna.
 */
class Dashboard extends CI_Controller
{
    /**
     * Construct
     *
     * Memeriksa apakah pengguna sudah login, jika belum maka diarahkan ke halaman login.
     */
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        
    }
    
    /**
     * Halaman Utama Dashboard
     *
     * Menampilkan halaman utama dashboard dengan data jumlah mangrove.
     *
     * @return void
     */
    public function index()
    {
        $this->load->model('Chart_model');

        $data['title'] = 'Dashboard - Visit Bali’s Mangrove Forest';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        // Mengambil data jumlah mangrove dari model
        $data['jmlhmangrove'] = $this->Chart_model->getJumlahMangrove();
        $this->load->view('dashboard' , $data);
    }

    /**
     * Halaman Profil Pengguna
     *
     * Menampilkan halaman profil pengguna.
     *
     * @return void
     */
    public function profil()
    {
        $data['title'] = 'Profile - Visit Bali’s Mangrove Forest';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->view('profil', $data);
    }

}