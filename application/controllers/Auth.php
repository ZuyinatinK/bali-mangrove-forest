<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Auth
 *
 * Controller ini berfungsi untuk menangani autentikasi pengguna, termasuk login, registrasi, dan logout.
 */
class Auth extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat pustaka form_validation.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    /**
     * Halaman Login
     *
     * Menampilkan halaman login dan memvalidasi input pengguna.
     *
     * @return void
     */
    public function index()
    {
        // Menentukan aturan validasi untuk field email dan password
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, menampilkan halaman login
            $data['title'] = 'Login - Visit Bali’s Mangrove Forest';
			$this->load->view('templates/auth_header', $data); 
			$this->load->view('auth/login');
        }else {
            // Jika validasi berhasil, memanggil metode _login
            $this->_login();
        }
    }
    
    /**
     * Proses Login
     *
     * Memverifikasi kredensial pengguna dan mengatur sesi pengguna.
     *
     * @return void
     */
    private function _login()
    {
        // Mengambil input email dan password dari form
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Mengambil data pengguna berdasarkan email
        $user = $this->db->get_where('user',['email'=> $email])->row_array();
        
        // Memeriksa apakah pengguna ditemukan
        if ($user) {
            // Memeriksa apakah pengguna aktif
            if ($user['is_active'] == 1) {
                // Memverifikasi password
                if (password_verify($password, $user['password'])) {
                    // Mengatur data sesi
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    // Mengarahkan pengguna berdasarkan role_id
                    if ($user['role_id'] == 0){
                        redirect('auth');
                    } else if ($user['role_id'] == 1){
                        redirect('dashboard/profil');
                    } else {
                        redirect('auth');
                    }
                    
                    redirect('dashboard');
                } else {
                     // Jika password salah, menampilkan pesan kesalahan
                    $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger" role="alert">
                    Password Salah!
                    </div>');
                    redirect('auth');
                }
            } else {
                 // Jika pengguna belum aktif, menampilkan pesan kesalahan
                $this->session->set_flashdata('message', 
                '<div class="alert alert-danger" role="alert">
                Email Belum Mendapat Persetujuan!
                </div>');
                redirect('auth');
            }
        } else {
            // Jika pengguna tidak ditemukan, menampilkan pesan kesalahan
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger" role="alert">
            Email Tidak Terdaftar!
            </div>');
            redirect('auth');
        }
    }

    /**
     * Halaman Registrasi
     *
     * Menampilkan halaman registrasi dan memvalidasi input pengguna.
     *
     * @return void
     */
    public function registrasi()
    {
        // Menentukan aturan validasi untuk setiap field
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email ini sudah mempunyai akun yang terdaftar!'
        ]);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
            'maches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
        
        // Memeriksa apakah validasi form berhasil
        if($this->form_validation->run() == false){
             // Jika validasi gagal, menampilkan halaman registrasi
            $data['title'] = 'Register- Visit Bali’s Mangrove Forest';
			$this->load->view('templates/auth_header', $data); 
			$this->load->view('auth/registrasi');
        }else{
            // Jika validasi berhasil, menyimpan data pengguna baru ke database
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto' => 'profile.jpg',
                'password' => password_hash($this->input->post('password1'), 
                PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            // Menambahkan data pengguna ke tabel user
            $this->db->insert('user',$data);

            // Menampilkan pesan keberhasilan dan mengarahkan kembali ke halaman registrasi
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible alert-alt solid fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
            <strong>Success!</strong> Akun Sudah Didaftarkan!</div>');
            redirect('auth/registrasi');
        }
    }

    /**
     * Logout
     *
     * Menghapus data sesi pengguna dan mengarahkan kembali ke halaman login.
     *
     * @return void
     */
    public function logout(){
        // Menghapus data sesi
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        // Menampilkan pesan keberhasilan logout dan mengarahkan kembali ke halaman login
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible alert-alt solid fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
        <strong>Success!</strong> Akun Berhasil Logout!</div>');
        redirect('auth');
    }

    /**
     * Detail Pengguna
     *
     * Mendapatkan detail data pengguna berdasarkan ID.
     *
     * @param int $id ID pengguna
     * @return void
     */
    public function detailUser($id){
        // Memuat model User_model
        $this->load->model('User_model');
        // Mendapatkan data pengguna berdasarkan ID
        $this->User_model->getUserByID($id);
    }
}