<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelMangrove extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('Mangrove_model');

    }

    public function index()
    {
        $this->load->model('Mangrove_model');
        $data['title'] = 'Dataset Mangrove - Visit Bali’s Mangrove Forest';
        $data['tbbali'] = $this->Mangrove_model->getAllMangrove();
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $this->load->view('tabel_mangrove', $data);
    }
    
    public function tambah(){

        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('latitude','Latitude','required|trim');
        $this->form_validation->set_rules('longitude','Longitude','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('Mangrove_model');
            $data['tbbali'] = $this->Mangrove_model->getAllMangrove();
            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
            $this->load->view('tabel_mangrove', $data);
            
        } else {
            
            $this->load->model('Mangrove_model');
            $this->Mangrove_model->tambahDataMangrove();
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelMangrove')."'</script>";	
        }
        
    }
    
    public function edit($id)
	{
        $data['title'] = 'Update Data Mangrove - Visit Bali’s Mangrove Forest';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('latitude','Latitude','required|trim');
        $this->form_validation->set_rules('longitude','Longitude','required|trim');

        if ($this->form_validation->run() == false) {
			$query = $this->Mangrove_model->getMangroveByID($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->load->view('tabel_mangrove_edit', $data);
			} else {
				echo "<script>alert('Data Tidak ditemukan')";
				echo "window.location='".site_url('tabelMangrove')."'</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mangrove_model->editDataMangrove($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil diedit')</script>";
			}
				echo "<script>window.location='".site_url('tabelMangrove')."'</script>";	
		}	
	}
    
    public function hapus($id){
        
        $this->load->model('Mangrove_model');
        $this->Mangrove_model->hapusDataMangrove($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil dihapus')</script>";
			}
				echo "<script>window.location='".site_url('tabelMangrove')."'</script>";	

    }
    public function ubah($id){
        $data['tbbali'] = $this->Mangrove_model->getMangroveByID($id);
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true)
        ];
        $this->db->insert('tb_bali',$data);
    }
}