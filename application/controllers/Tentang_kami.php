<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('general_model');		
	}

	public function index()
	{			
        $where_organization['organization_id'] = 1;    		

        $data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);        		        
        
        $data['organization_address'] = $this->general_model->get_info("*", "organization_address", $where_organization)->result();		        

		$this->load->view('tentang_kami', $data);
	}			
}
