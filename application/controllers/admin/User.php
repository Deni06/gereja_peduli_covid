<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('group') !=  '1')
        // {
        //     $this->session->set_flashdata('error','You have no access to that page.');
        //     redirect('login');  
        // }
        $this->load->model('User_model');
        $this->load->model('general_model');
        $this->load->model('user_group_model');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $this->user_library->checking_page_access('user',"user","view");   
        $data['users'] = $this->User_model->get_all_users();

        $where_kontak['organization_id'] = 1;                   
        $data['kontak'] = $this->general_model->get_info("*", "organization", $where_kontak)->row();                            

        $this->load->view('backend/user/master_user',$data);
    }
    
    function add()
    {   
        $this->user_library->checking_page_access('user',"user","add");   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $where_check_username['usr_name'] = $this->input->post('usr_name');   
            $check_username = $this->general_model->get_info("count(1) as count", "users", $where_check_username);                

    if($check_username != FALSE) {        
        if($check_username->row()->count > 0){
            $this->session->set_flashdata('error', 'Email Already Use');                      
            $data['user_group'] = $this->user_group_model->get_all_user_group();
            return $this->load->view('backend/user/add_user', $data);
        }
    }

            $params = array(				
				'stuts' => 1,
				'usr_password' => md5($this->input->post('usr_password')),
				'usr_name' => $this->input->post('usr_name'),
				'usr_address' => $this->input->post('usr_address'),				
				'usr_phone' => $this->input->post('usr_phone'),
				'usr_city' => $this->input->post('usr_city'),
				'usr_zip' => $this->input->post('usr_zip'),
				'usr_fullname' => $this->input->post('usr_fullname'),
				'usr_citycode' => $this->input->post('usr_citycode'),
                'usr_group' => $this->input->post('user_group'),
            );
            
            $user_id = $this->User_model->add_user($params);
            $this->session->set_flashdata('success','Add User Success');    
            redirect('admin/user');
        }
        else
        {            
            $data['user_group'] = $this->user_group_model->get_all_user_group();
            $where_kontak['organization_id'] = 1;                   
            $data['kontak'] = $this->general_model->get_info("*", "organization", $where_kontak)->row();                            
            $this->load->view('backend/user/add_user', $data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($usr_id)
    {   
        $this->user_library->checking_page_access('user',"user","edit");   
        date_default_timezone_set('Asia/Jakarta');
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($usr_id);
        
        if(isset($data['user']['usr_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $where_check_username['usr_name'] = $this->input->post('usr_name');   
                $exception_user['field'] = 'usr_id';
        $exception_user['value'] = $usr_id;
            $check_username = $this->general_model->get_info("count(1) as count", "users", $where_check_username,
            array(), array(), $exception_user);                            

    if($check_username != FALSE) {        
        if($check_username->row()->count > 0){
            $this->session->set_flashdata('error', 'Email Already Use');                      
            $data['user_group'] = $this->user_group_model->get_all_user_group();
            return $this->load->view('backend/user/edit_user', $data);
        }
    }

                $params = array(
                    'usr_name' => $this->input->post('usr_name'),
                    'usr_address' => $this->input->post('usr_address'),                    
                    'usr_phone' => $this->input->post('usr_phone'),
                    'usr_zip' => $this->input->post('usr_zip'),
                    'usr_fullname' => $this->input->post('usr_fullname'),
                );

                if($this->input->post('user_group') != "" && $this->input->post('user_group') != null){
                    $params['usr_group'] = $this->input->post('user_group');
                }

                $this->User_model->update_user($usr_id,$params); 
                $this->user_library->reset_login_info(); 
                $this->session->set_flashdata('success','Edit User Success');            
                redirect('admin/user');
            }
            else
            {
                $data['user_group'] = $this->user_group_model->get_all_user_group();
                $where_kontak['organization_id'] = 1;                   
                $data['kontak'] = $this->general_model->get_info("*", "organization", $where_kontak)->row();                            
                $this->load->view('backend/user/edit_user',$data);
            }
        }
        else {
            $this->session->set_flashdata('error','User doesnt exist');    
            redirect('admin/user');
        }        
    } 

    /*
     * Deleting user
     */
    function remove($usr_id)
    {
        $this->user_library->checking_page_access('user',"user","delete");   
        $user = $this->User_model->get_user($usr_id);

        // check if the user exists before trying to delete it
        if(isset($user['usr_id']))
        {
            $this->User_model->delete_user($usr_id);
            $this->session->set_flashdata('success','Delete User Success');                
            redirect('admin/user');
        }
        else {
            $this->session->set_flashdata('error','Delete User Failed');    
            redirect('admin/user');
        }            
    }

    public function View($id){
        $this->user_library->checking_page_access('user',"user","view");   
        $data["me"] = $this->User_model->get_user($id);
        $where_kontak['organization_id'] = 1;                   
        $data['kontak'] = $this->general_model->get_info("*", "organization", $where_kontak)->row();                            
        if(isset($data['me']['usr_id']))
        {
            $this->load->view('backend/user/view_user',$data);
        }else{
            $this->session->set_flashdata('error','User doesnt exist');    
            redirect('admin/user');
        }		
	}
    
}
