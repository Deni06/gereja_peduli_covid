<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_users extends CI_Model {
	public function get_user_id_by_session()
	{
		$usr_name = $this->session->userdata('username');
		$gry = $this->db->where('usr_name',$usr_name)
			->select('usr_id')
			->limit(1)
			->get('users');
		if($gry->num_rows() > 0 )
		{
			return $gry->row()->usr_id;
		}else{

			return 0;
		}
	}
	function get_user($usr_id)
    {
        $user = $this->db->query("
            SELECT
                *

            FROM
                `users`

            WHERE
                `usr_id` = ?

        ",array($usr_id))->row_array();

        return $user;
    }
	public function check_usr($username, $password)
		{			
			$stuts = '1';
			$gry = $this->db->select('a.*,b.user_all_access,b.user_group_all_access,b.donasi_all_access,
			b.contact_all_access,b.article_all_access,b.ads_all_access')
							->join('groups b','a.usr_group = b.gro_id','left')
							->where('usr_name',$username)
							->where('usr_password', md5($password))
							->where('stuts',$stuts)
							->limit(1)
							->get('users a');
			if($gry->num_rows()	>	0)
			{
				return $gry->row();	
			}else{
					return array();
			}
				
				
		}//end check_usr function	

	public function check_user_is_active($username, $password)
		{			
			$stuts = '0';
			$gry = $this->db->where('usr_name',$username)
							->where('usr_password',$password)
							->where('stuts',$stuts)
							->limit(1)
							->get('users');
			if($gry->num_rows()	>	0)
			{
				return $gry->row();	
			}else{
					return array();
			}
				
				
		}
	
	public function members()
		{ 
			$member = $this->db->get('users');
			if($member->num_rows() > 0 ) {
				return $member->result();
			} else {
				return array();
			} //end if num_rows
			
		}//end function member

	public function getmembers()
	{
		$member = $this->db->where('usr_id',$this->get_user_id_by_session())->get('users');
		if($member->num_rows() > 0 ) {
			return $member->result();
		} else {
			return array();
		} //end if num_rows

	}//end function member



	public function active($usr_id,$data_user)
		{	
			$this->db->where('usr_id',$usr_id)
					->update('users',$data_user);
						
		}
	
	public function disable($usr_id,$data_user)
		{	
			$this->db->where('usr_id',$usr_id)
			->update('users',$data_user);
			
		}
		public function update($usr_name,$data_user)
		{	
			$this->db->where('usr_name',$usr_name)
			->update('users',$data_user);
			
		}
		public function update_user($usr_id,$data_user)
		{	
			$this->db->where('usr_id',$usr_id)
			->update('users',$data_user);
			
		}
		
	public function register_new($data_register_new)
	{
		$this->db->insert('users',$data_register_new);		
	}
	
	public function is_usr()
	{
		$username = set_value('rusername');	
		$gry = $this->db->where('usr_name',$username)
		->limit(1)
		->get('users');
		if($gry->num_rows()	>	0)
		{
			return TRUE;	
			}else{
			return FALSE;
		}
		
		
	}
	
	public function check()
	{
		$username = set_value('rusername');	
		$password = set_value('rpassword');	
		$stuts = '1';
		$gry = $this->db->where('usr_name',$username)
		->where('usr_password',$password)
		->where('stuts',$stuts)
		->limit(1)
		->get('users');
		if($gry->num_rows()	>	0)
		{
			return $gry->row();	
			}else{
			return array();
		}
		
	}
	public function forgot_check()
	{
		$username = set_value('rusername');	
		$phone = set_value('rphone');	
		$stuts = '1';
		$gry = $this->db->where('usr_name',$username)
		->where('usr_phone',$phone)
		->where('stuts',$stuts)
		->limit(1)
		->get('users');
		if($gry->num_rows()	>	0)
		{
			return $gry->row();	
			}else{
			return array();
		}
		
	}
	
		public function check_password_admin_for_change()
		{
			$old_password	= set_value('oldpassword_admin'); 	
			$usr_name = 'admin';
			$gry = $this->db->where('usr_name',$usr_name)
							->where('usr_password',$old_password)
							->limit(1)
							->get('users');
			if($gry->num_rows()	>	0)
			{
					return $gry->row();	
			}else{
					return array();
			}
		}
		public function m_change_admin_password($new_admin_password)
		{
			
			$usr_name = 'admin';
			$this->db->where('usr_name',$usr_name)	
					->update('users',$new_admin_password);
		}
		function get_all_users()
    {
        $users = $this->db->query("
            SELECT
                *

            FROM
                `users`

            ORDER BY `usr_id` DESC
        ")->result_array();

        return $users;
    }
	
	
		
	}///end class  ///
	
	
?>
		