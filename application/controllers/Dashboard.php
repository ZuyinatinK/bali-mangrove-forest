<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        
    }
    
    public function index()
    {
        $this->load->model('Chart_model');

        $data['title'] = 'Dashboard - Visit Bali’s Mangrove Forest';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['jmlhmangrove'] = $this->Chart_model->getJumlahMangrove();
        $this->load->view('dashboard' , $data);
    }

    public function profil()
    {
        $data['title'] = 'Profile - Visit Bali’s Mangrove Forest';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->view('profil', $data);
    }

}