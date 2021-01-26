<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('general_model');		
	}

	public function index()
	{			
        $where_organization['organization_id'] = 1;    
		$where_donasi['donasi_id'] = 1;    		

        $data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);        		

		$data['donasi'] = $this->general_model->get_info("*", "donasi", $where_donasi);		

		$this->load->view('donasi', $data);
	}			
}
