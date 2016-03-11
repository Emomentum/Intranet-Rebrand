<?php
/**
 * 
 */
class Home_model extends CI_Model {
	
	  function __construct() {
            parent::__construct(); //call the model contructor
        }
		 
	function getEvent($id){
	 	 	
	 	$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_topic_id ='=> $id));
		$this->db->join('blog_details','blog_details.Blog_topic_id=blog_topic.Blog_topicID' );
	    $this->db->limit(1);
		$result = $this->db->get();
        return $result->result();
		}
	 
     
     function getUpcomingEventNews($type){

		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $type));
		$this->db->order_by('Blog_topicID', 'desc');
		$this->db->join('blog_details','blog_details.Blog_topic_id=blog_topic.Blog_topicID' );
	    $this->db->limit(7);
		$result = $this->db->get();
        return $result->result();
		}
	  function eventNews($type){

		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $type));
		$this->db->order_by('Blog_topicID', 'desc');
		$this->db->join('blog_details','blog_details.Blog_topic_id=blog_topic.Blog_topicID' );
	    $this->db->limit(5);
		$result = $this->db->get();
        return $result->result();
		}
	 function getAllUpcomingEventNews($type){

		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $type));
		$this->db->order_by('Blog_topicID', 'desc');
		$this->db->join('blog_details','blog_details.Blog_topic_id=blog_topic.Blog_topicID' );
		$result = $this->db->get();
        return $result->result();
		}
	 
	
	 
function createPage($postTitle,$postCont,$postStart,$postEnd,$type){
	
	 $data=array('Topic'=>$postTitle,'Blog_type_ID'=>$type);
		 if(empty($this->db->get_where('blog_topic',array('Topic ='=>$postTitle))->result())):
			 $this->db->insert('blog_topic',$data);
			 
			 $newblogTopicId = $this->db->select('Blog_topicID')->from('blog_topic')
			 						->where(array('Topic ='=> $postTitle))
			 						->get()->result()[0]->Blog_topicID;
			 $data2 = array('details'=>$postCont,'Blog_topic_id'=>$newblogTopicId,'Start_Date'=>$postStart,'End_Date'=>$postEnd); 
		 	 $this->db->insert('blog_details',$data2);
		 else:
         return "Topic already exist";
		 endif;
}
	 
function delete_Event($id)
{
   //$this->db->where('postID', $id);
   //$this->db->delete('blog_posts'); 
   
   
      $res = $this->db->delete('blog_topic', array('Blog_topicID' => $id));
	  //$res4 = $this->db->affected_rows();
	  $res2 = $this->db->delete('blog_details', array('Blog_topic_id' => $id));
	  $res3 = $this->db->delete('blog_comments', array('Blog_topic_ID' => $id));
	 //return $res4;	  
}

function update_Event($id,$topic,$description,$postDate,$postStart,$postEnd)
{

$data = array('Topic'=>$topic,'Timestamp'=>$postDate);	
		$this->db->where('Blog_topicID',$id)
				->update('blog_topic',$data);
		$data2=array('details'=>$description,'Start_Date'=>$postStart,'End_Date'=>$postEnd);
        $this->db->where('Blog_topic_id',$id)
              	 ->update('blog_details',$data2);

}

}
	

?>