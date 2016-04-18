<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Team_model extends CI_model
{
	  function __construct() {
            parent::__construct(); //call the model contructor
        }
		 
	function getTeam($id){
	 	 	
	 	$this->db->select('*');
		$this->db->from('team');
		$this->db->where(array('Department_id ='=> $id));
		$result = $this->db->get();
        return $result->result();
		}
		function getAccess(){
$position = "Team Lead";
$this->db->select('*');
$this->db->from('team');
$this->db->where(array('Position ='=> $position));
$result = $this->db->get();
       return $result->result();
}
}
	

?>