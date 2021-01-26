<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_library {

    function __construct(){

    }
   
    public function show_user_access(){              
        $CI =& get_instance();                
        return $CI->session->userdata('user_access');
    }
    
    public function show_donasi_access(){
        $CI =& get_instance();
        return $CI->session->userdata('donasi_access');
    }
    
    public function show_contact_access(){
        $CI =& get_instance();
        return $CI->session->userdata('contact_access');
    }
    
    public function show_ads_access(){
        $CI =& get_instance();
        return $CI->session->userdata('ads_access');
    }
    
    public function show_article_access(){
        $CI =& get_instance();
        return $CI->session->userdata('article_access');
    }
    
    public function show_user_group_access(){
        $CI =& get_instance();
        return $CI->session->userdata('user_group_access');
    }        
        
    public function checking_page_access($page,$type="",$action=""){        
        $CI =& get_instance();
        $status = false;
        if($type == "user"){
            $user_data_access = $this->show_user_access();            
            if($action == "view"){                
                $status = strpos($user_data_access, ';1;');
            }elseif($action == "add"){
                $status = strpos($user_data_access, ';2;');
            }elseif($action == "edit"){
                $status = strpos($user_data_access, ';3;');
            }elseif($action == "delete"){
                $status = strpos($user_data_access, ';4;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "donasi"){
            $donasi_data_access = $this->show_donasi_access();
            if($action == "view"){
                $status = strpos($donasi_data_access, ';1;');
            }elseif($action == "edit"){
                $status = strpos($donasi_data_access, ';2;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "contact"){
            $contact_data_access = $this->show_contact_access();
            if($action == "view"){
                $status = strpos($contact_data_access, ';1;');
            }elseif($action == "edit"){
                $status = strpos($contact_data_access, ';2;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "ads"){
            $ads_data_access = $this->show_ads_access();
            if($action == "view"){
                $status = strpos($ads_data_access, ';1;');
            }elseif($action == "add"){
                $status = strpos($ads_data_access, ';2;');
            }elseif($action == "edit"){
                $status = strpos($ads_data_access, ';3;');
            }elseif($action == "delete"){
                $status = strpos($ads_data_access, ';4;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "article"){
            $article_data_access = $this->show_article_access();
            if($action == "view"){
                $status = strpos($article_data_access, ';1;');
            }elseif($action == "add"){
                $status = strpos($article_data_access, ';2;');
            }elseif($action == "edit"){
                $status = strpos($article_data_access, ';3;');
            }elseif($action == "delete"){
                $status = strpos($article_data_access, ';4;');
            }elseif($action == "review"){
                $status = strpos($article_data_access, ';5;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "user_group"){
            $user_group_data_access = $this->show_user_group_access();            
            if($action == "view"){
                $status = strpos($user_group_data_access, ';1;');
            }elseif($action == "add"){
                $status = strpos($user_group_data_access, ';2;');
            }elseif($action == "edit"){
                $status = strpos($user_group_data_access, ';3;');
            }elseif($action == "delete"){
                $status = strpos($user_group_data_access, ';4;');
            }
            if($status !== false){
                $status = true;
            }
        }                           
        if($status == false){
            $CI->session->set_flashdata('error','You have no access to that page.');
            redirect("login");
        }
    }

    public function show_username(){
        $CI =& get_instance();
        return $CI->session->userdata('username');
    }
    
    public function reset_login_info(){
        $CI =& get_instance();
        $username = $this->show_username();
        
        if($username != ""){
            $userinfo = $CI->user_group_model->userinfo($username);
            
            $CI->session->set_userdata('userid',$userinfo->usr_id);
					$CI->session->set_userdata('userfullname',$userinfo->usr_fullname);
					$CI->session->set_userdata('username',$userinfo->usr_name);
					$CI->session->set_userdata('group',$userinfo->usr_group);
					$CI->session->set_userdata('user_access',$userinfo->user_all_access);
					$CI->session->set_userdata('user_group_access',$userinfo->user_group_all_access);
					$CI->session->set_userdata('donasi_access',$userinfo->donasi_all_access);
					$CI->session->set_userdata('contact_access',$userinfo->contact_all_access);
					$CI->session->set_userdata('article_access',$userinfo->article_all_access);
					$CI->session->set_userdata('ads_access',$userinfo->ads_all_access);					
            
            return TRUE;
        }else{
            return FALSE;
        }
    }
}


