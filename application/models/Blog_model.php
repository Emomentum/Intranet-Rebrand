<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_model
{
	public function setTopic($newTopic)//Gets Runnable positions
	{
		$result = $this->db->get_where('topics',array('topic ='=>$newTopic))->result();
		if(empty($result))
		{
		$data['topic'] = $newTopic;
		$topic = $this->db->insert('topics',$data);
		return true;
		}
		else
		{
		return false;
		}
	}
	function getBlogDetails(){
		$blogId = 5;
		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $blogId));
		$this->db->join('blog_details','blog_details.Blog_topic_id = blog_topic.Blog_topicID');
		$this->db->order_by('Blog_topicID','desc');
		$result = $this->db->get();
		return $result->result();
		
	}
	public function getTopics()
	{
		$blogId = 5;
		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $blogId));
		//$this->db->join('blog_details','blog_details.Blog_topic_id = blog_topic.Blog_topicID');
		$this->db->order_by('Blog_topicID','desc');
		$result = $this->db->get();
		return $result->result();
	}
	public function getTopicDescription(){		
		$blogId = 5;
		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $blogId));
		$this->db->join('blog_details','blog_details.Blog_topic_id = blog_topic.Blog_topicID');
		$this->db->order_by('Blog_topicID','desc');
		$this->db->limit(1);
		$result = $this->db->get();
		return $result->result();
	}
	public function getTopicDescriptions ($topicid){
		$this->db->select('*');
		$this->db->from('blog_details');
		$this->db->where(array('Blog_topic_id ='=> $topicid));
		$this->db->join('blog_topic','blog_topic.Blog_topicID = blog_details.Blog_topic_id');
	    $this->db->limit(1);
		$result = $this->db->get();
        return $result->result();
		
	}
    public function getComments($topicid)
    {
        $result = $this->db->get_where('blog_comments',array('Blog_topic_ID ='=> $topicid))->result();
            return $result;
    }
	 public function getCommentsNo($topicid)
    {
        $this->db->get_where('blog_comments',array('Blog_topic_ID ='=> $topicid))->result();
		$result = $this->db->affected_rows();
        return $result;
    }
    public function setComments($topicid,$mydetails)
    {
        $mycomment = array('details'=>$mydetails,'topicid'=>$topicid);
        $this->db->insert('comments',$mycomment);
        return true;
    }
	public function newblog($topic,$description){
		 $data=array('Topic'=>$topic,'Blog_type_ID'=>5);
		 if(empty($this->db->get_where('blog_topic',array('Topic ='=>$topic))->result())):
			 $this->db->insert('blog_topic',$data);
			 $newblogTopicId = $this->db->select('Blog_topicID')->from('blog_topic')->where(array('Topic ='=> $topic))->get()
			 							->result()[0]->Blog_topicID;
			 $data2 = array('details'=>$description,'Blog_topic_id'=>$newblogTopicId); 
		 	 $this->db->insert('blog_details',$data2);
		 else:
         return "Topic already exist";
		 endif;
	}
	public function updateblog($id,$topic,$description)
	{
		$data = array('Topic'=>$topic);	
		$this->db->where('Blog_topicID',$id)
				->update('blog_topic',$data);
		$data2=array('details'=>$description);
        $this->db->where('Blog_topic_id',$id)
              	 ->update('blog_details',$data2);
		
	}
 public function deleteblog($id)
    {
	  $res = $this->db->delete('blog_topic', array('Blog_topicID' => $id));
	  $res4 = $this->db->affected_rows();
	  $res2 = $this->db->delete('blog_details', array('Blog_topic_id' => $id));
	  $res3 = $this->db->delete('blog_comments', array('Blog_topic_ID' => $id));
	 return $res4;	  
    }
 public function setcomment($topicid,$comment,$useremail){
 	$data = array('Comments'=>$comment,'Email'=>$useremail,'Blog_topic_ID'=>$topicid);
 	$this->db->insert('blog_comments',$data);
	
 }
}  
