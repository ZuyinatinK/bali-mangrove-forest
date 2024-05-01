<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent:: __construct();
        $this->load->model('Mangrove_model');
		$this->load->library('session');
    }
	
	public function index()
	{
		$recordInformasi = $this->Mangrove_model->getDataMangrove();
		$data = array('tabelbali' => $recordInformasi);
        $data['tbbali'] = $this->Mangrove_model->getAllMangrove();
		$this->load->view('home', $data);
	}
}
