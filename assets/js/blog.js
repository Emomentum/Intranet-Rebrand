/**
 * @author Mangwels
 */
$(function(){
$('li.blog_topic a').click(function(){
	var current = $(this).closest("li.blog_topic");
	var topic = current.find("input.blogTopicId").val();
	var comment = document.getElementById('comments_holder');
	var topicid = parseInt(topic);
    var link = 'blog/getBlogComments/'+topicid;
    		$.ajax({
			url:link,
			type:"POST",
			datatype:"json",
			cache:false,
			data:{},
			success:function(result){
				var result =JSON.parse(result);
			  for (var i=0; i < result.length; i++) {
				  if(result[i].Blog_topic_id != ""){
		 		  	var BlogDetails = result[i].Comments;
				    comment.innerHTML = "<p>"+BlogDetails+"</p><p style='font-size:9px;margin: 10px 0 10px;color: #07AB54;'>Author : kingsley.amaitsa@emomentum-interactive.com \n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted 3 days ago<br><hr style ='color: #07AA53;border: dotted 1px;'>";
		          }
				 else{
				 	console.log('unable');
			  //	res.append(result[i].details+"<br/><br/>");
			  }
			   };	
				comment.innerHTML = comment.innerHTML + '<textarea style = "width:100%;height:121px" name="comments" id = "comments" class = "newcomments"></textarea>'+'<br/><input type ="submit" value = "Submit" id ="add_comments" class = "btn btn-primary" style = "margin:10px;float:right;font-size:13px;"/>';
			},
			error:function(msg){
				var noComments = "No Comments Available";
				    comment.innerHTML = "<p>"+noComments+"</p><hr style ='color: #07AA53;border: dotted 1px;'>";
					comment.innerHTML = comment.innerHTML + '<textarea style = "width:100%;height:121px" name="comments" id = "comments" class = "newcomments"></textarea>'+'<br/><input type ="submit" value = "Submit" id ="add_comments" class = "btn btn-primary" style = "margin:10px;float:right;font-size:13px;"/>';
			
			}
		})
	return false;	
})
}
)	

