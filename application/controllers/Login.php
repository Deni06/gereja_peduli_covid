<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_users');		
		$this->load->model('general_model');		
	}

	public function index()
	{				
		$where_organization['organization_id'] = 1;    						
		$data['kontak'] = $this->general_model->get_info("*", "organization", $where_organization)->row();        		
			$this->load->view('login', $data);							
	}

	public function aksi_login(){			
		$username = $this->input->post('username');
		$password = $this->input->post('password');
				
				$this->load->model('model_users');	
				$valid_user	= $this->model_users->check_usr($username, $password);
				$check_user_is_active = $this->model_users->check_user_is_active($username, $password);					
				if($valid_user	==	FALSE)
				{
					if ($check_user_is_active == FALSE)
					{											
						$this->session->set_flashdata('error', 'Username / Password Not Correct !'); 
					}else{						
						$this->session->set_flashdata('error', 'Sorry this account is not active !'); 
					}
					
					redirect('login');					
				}else{
					$this->session->set_userdata('user_id',$valid_user->usr_id);
					$this->session->set_userdata('userfullname',$valid_user->usr_fullname);
					$this->session->set_userdata('username',$valid_user->usr_name);
					$this->session->set_userdata('group',$valid_user->usr_group);
					$this->session->set_userdata('user_access',$valid_user->user_all_access);
					$this->session->set_userdata('user_group_access',$valid_user->user_group_all_access);
					$this->session->set_userdata('donasi_access',$valid_user->donasi_all_access);
					$this->session->set_userdata('contact_access',$valid_user->contact_all_access);
					$this->session->set_userdata('article_access',$valid_user->article_all_access);
					$this->session->set_userdata('ads_access',$valid_user->ads_all_access);					
					redirect('admin/dashboard');
			}//end if validation		
	}	
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	public function admin_logout()
	{
		$this->session->sess_destroy();
		redirect('login/admin');
	}	
}