<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {

	public function __construct()
    {
        parent:: __construct();
		if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Mangrove_model');
		$this->load->library('session');
    }

    public function index()
	{
		$recordInformasi = $this->Mangrove_model->getDataMangrove();
        
		$data = array('tabelbali' => $recordInformasi);
		$data['title'] = 'Maps - Visit Bali’s Mangrove Forest';
		$this->load->view('maps', $data);
		
	}
}