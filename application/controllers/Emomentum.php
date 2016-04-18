<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emomentum extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	  function __construct() {
            parent::__construct(); //call the contructor
			$this->load->model('Team_model');
			$this->load->model('Home_model');
			$type = 4;
	  }
	public function index()
	{
		$this->load->view('home');
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
	public function innovate()
	{
		$this->load->view('innovate');
	}
	public function gallery()
	{
		
		
		$this->load->view('gallery');
	}
	public function single_post()
	{
		$this->load->view('single_post');
	}
	function development(){
			$id = 1;
			$data['employee'] = $this->Team_model->getTeam($id);
			//$data['otheremployee'] = $this->Team_model->getTeam($id);
			
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
			$this->load->view('projects',$data);
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
		function products(){
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
	
	
}
