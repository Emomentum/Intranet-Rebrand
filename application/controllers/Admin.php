<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

class Admin extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
            $this->load->model('blog_model');
			$this->load->model('departments_model');
        }

	public function index()
	{
		$data['blogTopics'] = $this->getTopic();
		$this->load->model('Team_model');
		$data['access'] = $this->Team_model->getAccess();
		$data['blogTopicDescription'] = $this->blog_model->getTopicDescription();	
		$this->load->view('Admin/blog',$data);
	}
	public function development()
	{
		$department_id = 1;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['departmentId'] = 1;
		$data['department'] = "Development";
		$this->load->view('Admin/development',$data);
	}
	public function technical(){
		$department_id = 2;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['departmentId'] = 2;
		$data['department'] = "Technical";
		$this->load->view('Admin/technical',$data);
		
	}
		public function projectsandconsultancy(){
		$department_id = 3;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['department'] = "Projects and Consultancy";
		$data['departmentId'] = 3;
		$this->load->view('Admin/projects',$data);
		
	}
	public function sales(){
		$department_id = 4;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['departmentId'] = 4;
		$data['department'] = "Sales";
		$this->load->view('Admin/sales',$data);
		
	}
		public function Presales(){
		$department_id = 5;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['departmentId'] = 5;
		$data['department'] = "Presales";
		$this->load->view('Admin/presales',$data);
		
	}
	
		public function marketing()
	{
		$department_id = 6;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['departmentId'] = 6;
		$data['department'] = "Marketing";
		$this->load->view('Admin/marketing',$data);
	}
	public function productandpartnership()
	{
		$department_id = 7;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['departmentId'] = 7;
		$data['department'] = "Product and Partnership";
		$this->load->view('Admin/product',$data);
	}
	public function directors()
	{
		$department_id = 8;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['department'] = "Directors";
		$data['departmentId'] = 8;
		$this->load->view('Admin/directors',$data);
	}
	public function finance()
	{
		$department_id = 9;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['department'] = "Finance";
		$data['departmentId'] = 9;
		$this->load->view('Admin/finance',$data);
	}
	public function HR()
	{
		$department_id = 10;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['department'] = "Human Resource";
		$data['departmentId'] = 10;
		$this->load->view('Admin/hr',$data);
	}
	public function RiskandCompliance()
	{
		$department_id = 11;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['department'] = "Risk and Compliance";
		$data['departmentId'] = 11;
		$this->load->view('Admin/risk',$data);
	}
		public function gallery()
	{
		$department_id = 12;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['employee'] = $this->departments_model->getEmployees($department_id);
		$data['departmentId'] = 12;
		$data['department'] = "Gallery";
		$this->load->view('Admin/album',$data);
	}
	public function photos($album_name){
		
		
		$data['album_name'] = $album_name;
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['breadcrum'] = "Gallery";
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_gallery/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_gallery/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
	    $this->load->view('Admin/photos',$data);
}				

function document_sales ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_sales/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_sales/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_sales',$data);
	}
	function document_finance ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_finance/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_finance/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_finance',$data);
	}	
	function document_presales ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_presales/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_presales/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_presales',$data);
	}
	function document_hr ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_human_resource/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_human_resource/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_hr',$data);
	}
	function document_products ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_products_partnership/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_products_partnership/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_products',$data);
	}
	function document_risk ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_risk_and_compliance/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_risk_and_compliance/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_risk',$data);
	}	
function document_directors ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_directors/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_directors/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_directors',$data);
	}
function document_marketing ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_marketing/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_marketing/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_marketing',$data);
	}
function document_projects ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_projects_and_consultancy/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_projects_and_consultancy/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_projects',$data);
		
	}
	function document_development ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_development/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_development/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_development',$data);
		
	}	
function document_technical ($album_name)
	{
		$data['breadcrum'] = "Documents";
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['album_name'] = $album_name;
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_technical/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_technical/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
		$this->load->view('Admin/document_technical',$data);
		
	}			
	
	
			
		public function newteammember()
	{
		$filename = $_FILES['userfile']['name'];
		if($filename == '')
		{
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$position = $this->input->post('position');
		$departmentpage = $this->input->post('departmentpage');
		$number = $this->input->post('number');
		$departmentid = $this->input->post('departmentid');	
		$password = md5('e12345');
		$username = $firstname.'.'.$lastname;
		$username = strtolower($username);
		$permission = 3;

			$this->db->insert('team',array('First_Name'=>$firstname,'Last_Name'=>$lastname,'Position'=>$position,'Email'=>$email,'username'=>$username,'password'=>$password,'Phone_number'=>$number,'Department_id'=>$departmentid));
			redirect($departmentpage);
		}
		else{
		$option = ['gs_bucket_name' => 'emomentum_profile_pics'];
		$upload_ur = CloudStorageTools::createUploadUrl('/upload', $option);
		$upload_ur;
		$filename = $_FILES['userfile']['name'];
		$gs_name = $_FILES['userfile']['tmp_name'];
		move_uploaded_file($gs_name, 'gs://emomentum_profile_pics/'.$filename.'');
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$position = $this->input->post('position');
		$departmentpage = $this->input->post('departmentpage');
		$number = $this->input->post('number');
		$departmentid = $this->input->post('departmentid');	
		$password = md5('e12345');
		$username = $firstname.'.'.$lastname;
		$username = strtolower($username);
		$permission = 3;

			$this->db->insert('team',array('photo_url'=>$filename,'First_Name'=>$firstname,'Last_Name'=>$lastname,'Position'=>$position,'Email'=>$email,'Phone_number'=>$number,'username'=>$username,'password'=>$password,'permission_id'=>$permission,'Department_id'=>$departmentid));
			redirect($departmentpage);
			}

	}
	public function editteammember()
	{
	$filename = $_FILES['userfile']['name'];
		if($filename == '')
		{
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$position = $this->input->post('position');
			$departmentpage = $this->input->post('departmentpage');
			$number = $this->input->post('number');
			$teamid = $this->input->post('teamid');	
			$this->db->where('Team_id',$teamid);
			$this->db->update('team',array('First_Name'=>$firstname,'Last_Name'=>$lastname,'Position'=>$position,'Email'=>$email,'Phone_number'=>$number));
		redirect($departmentpage);
		}
		else{
			$option = [ 'gs_bucket_name' => 'emomentum_profile_pics' ];
			$upload_ur = CloudStorageTools::createUploadUrl('/upload', $option);
			$upload_ur;
			$filename = $_FILES['userfile']['name'];
			$gs_name = $_FILES['userfile']['tmp_name'];
			move_uploaded_file($gs_name, 'gs://emomentum_profile_pics/'.$filename.'');
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$position = $this->input->post('position');
			$departmentpage = $this->input->post('departmentpage');
			$number = $this->input->post('number');
			$teamid = $this->input->post('teamid');	
			$this->db->where('Team_id',$teamid);
			$this->db->update('team',array('photo_url'=>$filename,'First_Name'=>$firstname,'Last_Name'=>$lastname,'Position'=>$position,'Email'=>$email,'Phone_number'=>$number));
		
		redirect($departmentpage);
			
		}

	}
	public function deleteteammember()
	{
		$teamid = $this->input->post('teamid');	
		$departmentpage = $this->input->post('departmentpage');
		$this->db->delete('team', array('Team_id' => $teamid));		
		redirect($departmentpage);
	}
	public function blog()
	{
		$data['blogTopics'] = $this->getTopic();
		$this->load->model('Team_model');
$data['access'] = $this->Team_model->getAccess();
		$data['blogTopicDescription'] = $this->blog_model->getTopicDescription();	
		$this->load->view('Admin/blog',$data);
	}
	function getTopic()
	{
	   if(empty($this->blog_model->getTopics())): 
         $array = array();
         $notopic = new stdClass;
         $notopic->topic= 'No Topics available';
         $array=$notopic;
         return array($array);  
       else:
       return $this->blog_model->getTopics();
       endif;
	}
	function newBlog(){
		$blogTopic = $this->input->post('new_topic');
		$blogDescription = $this->input->post('new_Description');
		$result = $this->blog_model->newblog($blogTopic,$blogDescription);
		if($result == "Topic already exist"):
			 $this->session->set_flashdata('fail_new_blog','<div class="alert alert-danger">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Unable to create New blog post.Topic Already already exist
                                                                 </div>
                                                                '); 
			redirect('admin/blog');
		else:
		redirect('admin/blog');
		endif;
		
	}
	function UpdateBlog(){
		$blogtopicId = $this->input->post('topicId');
		$blogTopic = $this->input->post('topic');
		$blogDescription = $this->input->post('blogDescription');
		$this->blog_model->updateblog($blogtopicId,$blogTopic,$blogDescription);
		$this->session->set_flashdata('success_update','<div class="alert alert-success">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Update successful
                                                                 </div>
                                                                '); 
               redirect('admin/blog');
	}
	function DeleteBlog(){
		$blogtopicId = $this->input->post('topicId');
		if($this->blog_model->deleteblog($blogtopicId) == 1):
			$this->session->set_flashdata('success_delete','<div class="alert alert-success">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Deleted successful
                                                                 </div>
                                                                '); 
			redirect('admin/blog');
			
		elseif($this->blog_model->deleteblog($blogtopicId) == 0):
			$this->session->set_flashdata('fail_deletion','<div class="alert alert-danger">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Failed to delete.Please Try again Later
                                                                 </div>
                                                                '); 
			redirect('admin/blog');
			
		endif;
	}
}
?>
