<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()//The class constructor
{
		parent::__construct();
		$this->load->model('loginModel','',TRUE);
}	
	public function index()
	{
        // if($this->session->userdata('email') !== FALSE){
            // $permissions = $this->session->userdata('access_level');
            // //echo $permissions;
               // if($permissions == 1){
                // redirect('admin');
            // }
            // elseif ($permissions == 2){
                // redirect('user');
            // }
        // }
        // else{
		$this->load->view('login');
       // }
	}
	public function resetpass()
	{
		$this->load->view('reset');
		
	}
	public function forget()
	{
		$data[''] = '';
		if (isset($_GET['info'])) {
               $data['info'] = $_GET['info'];
              }
		if (isset($_GET['error'])) {
              $data['error'] = $_GET['error'];
              }
		
		$this->load->view('login-forget',$data);
	}
public function doforget()
	{
		$this->load->helper('url');
		$email= $_POST['email'];
		$LoginLink = anchor('login',' Click Here to Login');
		$q = $this->db->query("select * from team where Email='" . $email . "'");
		$results = $q->result();
        if (count($results) == 1) {
            $user=$results[0];
			$this->resetpassword($user);
			$info= "Password has been reset and has been sent to email id: ". $email.$LoginLink;
			redirect('login/forget?info=' . $info, 'refresh');
        }
		else{
		$error= "The email id you entered is not found on our database ";
		redirect('login/forget?error=' . $error, 'refresh');
		}		
	}
private function resetpassword($user)
	{
		$this->load->helper('string');
		$password= random_string('alnum', 16);
		$this->db->where('Team_id',$user->Team_id);
		$this->db->update('team',array('temppassword'=>MD5($password)));
		$config = array(
                    'mailtype'  => 'html',
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com',
					'smtp_port' => 465,
					'smtp_user' => stripslashes('development.team@emomentum-interactive.com'),
					'smtp_pass' => stripslashes('K@r1bu12345!'),					
					'charset'  => 'iso-8859-1'
				); 
   ini_set("SMTP", "ssl://smtp.gmail.com");
   ini_set("smtp_port", "465");
   $this->load->library('email', $config);
   $this->email->set_newline("\r\n");
   $this->email->from('econnect@emomentum-interactive.com', 'econnect');
   $this->email->to($user->Email);
   $this->email->subject('Password reset');
   $this->email->message('You have requested the new password, Here is you new password:'. $password);
   $this->email->send();
	}  	
}
