<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

class Home extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
			$this->load->model('Team_model');
			$this->load->model('Home_model');
	  }

	public function index()
	{
		$this->load->model('Home_model');		
		$data['announcement']=$this->Home_model->getUpcomingEventNews($type=1);
		$data['communications']=$this->Home_model->getUpcomingEventNews($type=2);
		$data['upcoming']=$this->Home_model->eventNews($type=4);
		$this->load->view('home',$data);
		
	}	
	
	function newsandevents($type)
	{
		$types=$type;
		$data['type']=$types;
		$this->load->model('Home_model');
		$data['events']=$this->Home_model->getAllUpcomingEventNews($type);
		$data['upcoming']=$this->Home_model->eventNews($type=4);
		
		
		if($types==4){
		$this->load->view('news',$data);
		}else if($types==2){
		$this->load->view('communications',$data);
		}else
		if($types==1){
		$this->load->view('announcements',$data);
		
		}
		
}		

	function single_events($id,$type){
		$data['type']=$type;
		$this->load->model('Home_model');
		$data['event']=$this->Home_model->getEvent($id);
		$data['upcoming']=$this->Home_model->eventNews($type=4);
		$data['breadcrum'] = "Article";
		$this->load->view('includes/single_event',$data);
		
}
	function announcement()
{
	$type=1;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getAllUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function communications()
{
	$type=2;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getAllUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function upcoming()
{
	$type=4;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getAllUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function create_events($type)
{
	if($type==4){
	$data['type']=$type;
	$this->load->view('Admin/includes/create_page_upcoming',$data);
	}else{
		$data['type']=$type;
		$this->load->view('Admin/includes/create_page',$data);
	}
}

function viewpage($id,$type)
{
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/viewpage',$data);
}

function edit_page($id,$type)
{
	
	$this->load->model('Home_model');
	$data['type']=$type;
	$this->Home_model->getEvent($id);
	$data['edit_page']=$this->Home_model->getEvent($id);
	
	if($type==4){
	
	$this->load->view('Admin/includes/edit_page_upcoming',$data);
	}else{
		
	$this->load->view('Admin/includes/edit_page',$data);
	
	}
}

function delete_page($id,$type)
{
	$this->load->model('Home_model');
	$this->Home_model->delete_Event($id);
	$data['action']='Deleted';
	$this->callPage($type);
}

function save_events($type)
{
	$this->load->model('Home_model');
	$filename = $_FILES['userfile']['name'];
	if($filename == '')
		{
			if($type==4){
				
			$postTitle = $this->input->post('title');
			$postStart = $this->input->post('start');
			$postEnd = $this->input->post('end');
			$postCont = $this->input->post('content');
					
			$this->Home_model->createPage($postTitle,$postCont,$postStart,$postEnd,$type);
			}
			
			else{	 	
			
			$postTitle = $this->input->post('title');
			$postStart = "N/A";
			$postEnd = "N/A";
			$postCont = $this->input->post('content');
					
			$this->Home_model->createPage($postTitle,$postCont,$postStart,$postEnd,$type);
			}
		}
	else{
			if($type==4){
				
			$postTitle = $this->input->post('title');
			$postStart = $this->input->post('start');
			$postEnd = $this->input->post('end');
			$postCont = $this->input->post('content');
					
			$this->Home_model->createPage($postTitle,$postCont,$postStart,$postEnd,$type);
			}
			
			else{	 	
			
			$postTitle = $this->input->post('title');
			$postStart = "N/A";
			$postEnd = "N/A";
			$postCont = $this->input->post('content');
					
			$this->Home_model->createPage($postTitle,$postCont,$postStart,$postEnd,$type);
			}
		}
	$data['message'] = 'Data Inserted Successfully';
	$this->callPage($type);

}

function update_events($id,$type)
{
	$filename = $_FILES['userfile']['name'];
	if($filename == '')
		{
			if($type==4){ 
			$this->load->model('Home_model');
			$topic= $this->input->post('title');
			$description=$this->input->post('content');
			$postDate = date('Y-m-d H:i:s');
			$postStart = $this->input->post('start');
			$postEnd = $this->input->post('end');
			$data = array('Topic'=>$topic,'Timestamp'=>$postDate);	
			$this->db->where('Blog_topicID',$id)
					->update('blog_topic',$data);
			$data2=array('details'=>$description,'Start_Date'=>$postStart,'End_Date'=>$postEnd);
			$this->db->where('Blog_topic_id',$id)
              	 ->update('blog_details',$data2);
			$data['message'] = 'Data Inserted Successfully';
			$this->callPage($type);
			}else{
				
			$this->load->model('Home_model');
			$image = $this->input->post('image');
			$topic= $this->input->post('title');
			$description=$this->input->post('content');
			$postDate = date('Y-m-d H:i:s');
			$postStart = "N/A";
			$postEnd = "N/A";
			$data = array('Topic'=>$topic,'Timestamp'=>$postDate);	
			$this->db->where('Blog_topicID',$id)
					->update('blog_topic',$data);
			$data2=array('details'=>$description,'Start_Date'=>$postStart,'End_Date'=>$postEnd);
			$this->db->where('Blog_topic_id',$id)
					->update('blog_details',$data2);
			$data['message'] = 'Data Inserted Successfully';
			$this->callPage($type);
			}
		}
		else{
			if($type==4){ 
			$option = [ 'gs_bucket_name' => 'emomentum_announcements' ];
			$upload_ur = CloudStorageTools::createUploadUrl('/upload', $option);
			$upload_ur;
			$filename = $_FILES['userfile']['name'];
			$gs_name = $_FILES['userfile']['tmp_name'];
			move_uploaded_file($gs_name, 'gs://emomentum_announcements/'.$filename.'');
			$this->load->model('Home_model');
			$topic= $this->input->post('title');
			$description=$this->input->post('content');
			$postDate = date('Y-m-d H:i:s');
			$postStart = $this->input->post('start');
			$postEnd = $this->input->post('end');
			$this->Home_model->update_Event($id,$filename,$topic,$description,$postDate,$postStart,$postEnd);
			$data['message'] = 'Data Inserted Successfully';
			$this->callPage($type);
			}else{
			$option = [ 'gs_bucket_name' => 'emomentum_announcements' ];
			$upload_ur = CloudStorageTools::createUploadUrl('/upload', $option);
			$upload_ur;
			$filename = $_FILES['userfile']['name'];
			$gs_name = $_FILES['userfile']['tmp_name'];
			move_uploaded_file($gs_name, 'gs://emomentum_announcements/'.$filename.'');
			$this->load->model('Home_model');
			$topic= $this->input->post('title');
			$description=$this->input->post('content');
			$postDate = date('Y-m-d H:i:s');
			$postStart = "N/A";
			$postEnd = "N/A";
			$this->Home_model->update_Event($id,$filename,$topic,$description,$postDate,$postStart,$postEnd);
			$data['message'] = 'Data Inserted Successfully';
			$this->callPage($type);
			}
		}

}
function callPage($type)
{
	if ($type==1) {
		$this->announcement();
	} else if ($type==2) {
		$this->communications();
	} else if ($type==4) {
		$this->upcoming();
	}
}	
public function departments()
	{
		    $id = 8;
		$data['employee'] = $this->Team_model->getTeam($id);
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
		$this->load->view('departments',$data);
	}
	public function directors()
	{
		    $id = 8;
		$data['employee'] = $this->Team_model->getTeam($id);
		$data['employees'] = $this->Team_model->getTeam($id);
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
		$this->load->view('directors',$data);
	}
	
	public function finance()
	{
		    $id = 9;
		$data['employee'] = $this->Team_model->getTeam($id);
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
		$this->load->view('finance',$data);
	}
	public function single_post()
	{
		$this->load->view('single_post');
	}
	function development(){
			$id = 1;
			$data['employee'] = $this->Team_model->getTeam($id);
			$data['otheremployee'] = $this->Team_model->getTeam($id);
			
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			//$data['breadcrum'] = "Development";
			$this->load->view('development',$data);
		}

		function technical(){
			$id = 2;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			//$data['breadcrum'] = "Technical";
			$this->load->view('technical',$data);
		}
		function projects_and_consultancy(){
			$id = 3;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			//$data['breadcrum'] = "projects and consultancy";
			$this->load->view('projects_and_consultancy',$data);
		}
		function sales(){
			$id = 4;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['breadcrum'] = "sales";
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('sales',$data);
		}
		function presales(){
			$id = 5;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['breadcrum'] = "Pre Sales";
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('presales',$data);
		}
		function marketing(){
			$id = 6;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['breadcrum'] = "Marketing";
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('marketing',$data);
		}
		function products_and_partnership(){
			$id = 7;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['breadcrum'] = "Products and Partnership";
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('products',$data);
		}
	
		function hr(){
			$id = 10;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['breadcrum'] = "human Resource";
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('hr',$data);
		}
		function risk(){
			$id = 11;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['breadcrum'] = "Risk and Compliance";
			//$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('risk',$data);
		}
		function sign_out(){
			$this->session->sess_destroy();
			$this->load->view('login');
		}
		function change_password($username){
			$data['username'] = $username;
			$this->load->view('change_password',$data);
		}
		function checkpassword()
		{
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('confirm', 'Confirm Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[confirm]|xss_clean');
		 if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			$this->load->view('change_password'); 
		}
		else{
			$password = md5($this->input->post('password'));
			$email = $this->session->userdata('email');
			$this->db->update('team',array('password'=>$password));
			$this->db->where(array('email ='=> $email));
			$this->session->set_flashdata('change_successful','<div class="alert alert-success">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Password Change successful.Please login to access the Intranet
                                                                 </div>
                                                                '); 
		redirect('login');
		}							
		}
}