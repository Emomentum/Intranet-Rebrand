<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	
	public function index()
	{
		
		$this->load->view('album');
	}	

	
	public function album ($album_name){
		
		$data['album_name'] = $album_name;
		$data['breadcrum'] = "Gallery";
		$album_name_title = str_replace(" ","+",$album_name);
		$object_url = "https://www.googleapis.com/storage/v1/b/emomentum_gallery/o?delimiter=&prefix=".$album_name_title."&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ";
		$data['image_url'] = 'https://storage.googleapis.com/emomentum_gallery/';
		$object_content = file_get_contents($object_url);
		$album_objects = json_decode($object_content);
		$data['album_items'] = $album_objects->items;
		$data['photo_counter'] = count($data['album_items']);
	    $this->load->view('photos',$data);
}				
}
