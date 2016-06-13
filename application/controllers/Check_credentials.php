<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_credentials extends CI_Controller {
	public function __construct()//The class constructor
{
		parent::__construct();
		$this->load->model('loginModel','',TRUE);
}	
	public function index(){
		$this->load->helper('security');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		 if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			$this->load->view('login'); 
		}
	}
	public function check_database($password)//Field validation succeeded.  Validate against database
	{
		$username = $this->input->post('username');   
		//query the database
        $permissions = array();

		$tempresult = $this->loginModel->templogin($username, $password);
		if ($tempresult) {
			redirect('home/change_password');
		}
		$result = $this->loginModel->login($username, $password);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array('email' => $row->Email,'access_level' => $row->permission_id,'username'=>$row->username);
				$this->session->set_userdata($sess_array);
                array_push($permissions,$row->permission_id);
			    redirect('home');

			}
           /* if($permissions[0] == '1'){
             
            }
            elseif ($permissions[0] == '2'){
                redirect('home');
            }
			 elseif ($permissions[0] == '0'){
                redirect('home');
            }
			 elseif ($permissions[0] == '3'){
                redirect('home');
            }*/
      return TRUE;
		}
		else
		{
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
		}
	}
	
}