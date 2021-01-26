<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();		
		$this->load->model('general_model');     
	}
	
	public function index()
	{		
		$where_kontak['organization_id'] = 1;                   
        $data['kontak'] = $this->general_model->get_info("*", "organization", $where_kontak)->row();                            
		$this->load->view('backend/dashboard', $data);
	}


}



