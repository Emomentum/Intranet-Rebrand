<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginModel extends CI_model
{
	function login($username,$password)//checks database for matching username and password
	{
	$this->db->select('*')
			 ->from('team')
			 ->where('username = ' . "'" . $username . "'")
			 ->where('password = ' . "'" . md5($password) . "'")
			 -> limit(1);
			 
	$query = $this->db->get();
	
	if($query->num_rows() ==1)
	{
	return $query->result();
	}
	else
	{
		return false;
	}
	}
}
?>