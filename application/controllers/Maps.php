<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Maps
 *
 * Controller ini berfungsi untuk menampilkan halaman peta dengan data mangrove.
 */
class Maps extends CI_Controller {

	/**
     * Construct
     *
     * Memuat model `Mangrove_model` dan library `session`. Juga memeriksa apakah pengguna sudah login.
     */
	public function __construct()
    {
        parent:: __construct();
		// Mengecek apakah pengguna sudah login, jika belum maka akan dialihkan ke halaman login
		if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Mangrove_model');
		$this->load->library('session');
    }

	/**
     * Halaman Maps
     *
     * Menampilkan halaman maps dengan data mangrove dari database.
     *
     * @return void
     */
    public function index()
	{
		// Mengambil data mangrove dari model
		$recordInformasi = $this->Mangrove_model->getDataMangrove();
        
		// Menyiapkan data untuk dikirim ke view
		$data = array('tabelbali' => $recordInformasi);
		$data['title'] = 'Maps - Visit Bali’s Mangrove Forest';
		
		$this->load->view('maps', $data);
		
	}
}