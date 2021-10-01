<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_authenticationm extends CI_Model
{
	
	public function check_user($email, $password)
	{
		$Admin = "Admin";
		$res = $this->db->query(" SELECT count(id) as count, `id`, `name`, `designation` FROM `tbl_users` WHERE `email`='$email' AND `password`='$password' AND `designation`= '$Admin' ")->row();
		$rcount = $res->count;
		if ($rcount == 1) 
		{
			$user_array = array(
				'id' => $res->id,
				'name' => $res->name,
				'type' => $res->designation,
			);
			$this->session->set_userdata($user_array);
			echo 1;
		} 

		else 
		{
			echo 0;
		}
	}
}

