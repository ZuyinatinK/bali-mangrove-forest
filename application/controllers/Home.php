<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Home
 *
 * Controller ini berfungsi untuk menampilkan halaman utama dengan data mangrove.
 */
class Home extends CI_Controller {
	/**
     * Construct
     *
     * Memuat model `Mangrove_model` dan library `session`.
     */
	public function __construct()
    {
        parent:: __construct();
        $this->load->model('Mangrove_model');
		$this->load->library('session');
    }
	
	/**
     * Halaman Utama
     *
     * Menampilkan halaman utama dengan data mangrove dari database.
     *
     * @return void
     */
	public function index()
	{
		// Mengambil data mangrove dari model
		$recordInformasi = $this->Mangrove_model->getDataMangrove();
		// Menyiapkan data untuk dikirim ke view
		$data = array('tabelbali' => $recordInformasi);
        $data['tbbali'] = $this->Mangrove_model->getAllMangrove();
		
		$this->load->view('home', $data);
	}
}
