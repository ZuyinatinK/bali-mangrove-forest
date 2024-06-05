<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller TabelMangrove
 *
 * Controller ini mengelola data mangrove, termasuk menambah, mengedit, dan menghapus data.
 */
class TabelMangrove extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat model `Mangrove_model`, library `form_validation`, dan memeriksa apakah pengguna sudah login.
     */
    public function __construct()
    {
        parent:: __construct();
        // Memeriksa apakah pengguna sudah login. Jika belum, alihkan ke halaman login.
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('Mangrove_model');
    }

    /**
     * Halaman Index
     *
     * Menampilkan semua data mangrove dalam bentuk tabel.
     *
     * @return void
     */
    public function index()
    {
        $this->load->model('Mangrove_model');
        $data['title'] = 'Dataset Mangrove - Visit Bali’s Mangrove Forest';
         // Mengambil semua data mangrove
        $data['tbbali'] = $this->Mangrove_model->getAllMangrove();

        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        $this->load->view('tabel_mangrove', $data);
    }
    
    /**
     * Tambah Data Mangrove
     *
     * Menambah data mangrove baru ke dalam database.
     *
     * @return void
     */
    public function tambah()
    {
        // Validasi input form
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('latitude','Latitude','required|trim');
        $this->form_validation->set_rules('longitude','Longitude','required|trim');

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
            // Maka akan menampilkan page tabel mangrove
            $this->load->model('Mangrove_model');
            $data['tbbali'] = $this->Mangrove_model->getAllMangrove();
            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
            $this->load->view('tabel_mangrove', $data);
            
        } else { 
            // Menambah data mangrove ke database
            $this->load->model('Mangrove_model');
            $this->Mangrove_model->tambahDataMangrove();

            // Jika data berhasil ditambahkan, tampilkan pesan sukses
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelMangrove')."'</script>";	
        }
    }
    
    /**
     * Edit Data Mangrove
     *
     * Mengedit data mangrove berdasarkan ID.
     *
     * @param int $id ID dari data mangrove yang akan diedit.
     * @return void
     */
    public function edit($id)
	{
        $data['title'] = 'Update Data Mangrove - Visit Bali’s Mangrove Forest';
        // Mengambil data pengguna yang sedang login
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        // Validasi input form
		$this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('latitude','Latitude','required|trim');
        $this->form_validation->set_rules('longitude','Longitude','required|trim');

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
            // Mengambil data mangrove berdasarkan ID
			$query = $this->Mangrove_model->getMangroveByID($id);
            // Jika data ditemukan
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
                // Maka akan memuat view data yang telah diambil
				$this->load->view('tabel_mangrove_edit', $data);
			} else {
                // Jika data tidak ditemukan, tampilkan pesan kesalahan
				echo "<script>alert('Data Tidak ditemukan')";
				echo "window.location='".site_url('tabelMangrove')."'</script>";
			}
		} else {
             // Mengambil data dari input form
			$post = $this->input->post(null, TRUE);
            // Mengupdate data mangrove di database
			$this->Mangrove_model->editDataMangrove($post);
            // Jika data berhasil diedit, tampilkan pesan sukses
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil diedit')</script>";
			}
				echo "<script>window.location='".site_url('tabelMangrove')."'</script>";	
		}	
	}
    
    /**
     * Hapus Data Mangrove
     *
     * Menghapus data mangrove berdasarkan ID.
     *
     * @param int $id ID dari data mangrove yang akan dihapus.
     * @return void
     */
    public function hapus($id){
        // Menghapus data mangrove dari database
        $this->load->model('Mangrove_model');
        $this->Mangrove_model->hapusDataMangrove($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        // Jika data berhasil dihapus, tampilkan pesan sukses
        if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil dihapus')</script>";
		}
			echo "<script>window.location='".site_url('tabelMangrove')."'</script>";	
    }

    /**
     * Ubah Data Mangrove
     *
     * Mengubah data mangrove berdasarkan ID.
     *
     * @param int $id ID dari data mangrove yang akan diubah.
     * @return void
     */
    public function ubah($id){
        // Mengambil data mangrove berdasarkan ID
        $data['tbbali'] = $this->Mangrove_model->getMangroveByID($id);
        // Menyiapkan data untuk diubah
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true)
        ];
        // Menyimpan data yang diubah ke database
        $this->db->insert('tb_bali',$data);
    }
}