/**
 * @author Mangwels
 */
$(function(){
var comment = document.getElementById('comments_holder');
$('li.blog_topic a').click(function(){
	var current = $(this).closest("li.blog_topic");
	var topic = current.find("input.blogTopicId").val();
	var topicid = parseInt(topic);
	var noComments = "No Comments Available";
    var link = 'blog/getBlogComments/'+topicid;
    		$.ajax({
			url:link,
			type:"POST",
			datatype:"json",
			cache:false,
			data:{},
			success:function(result){
				var result =JSON.parse(result);
				comment.innerHTML = "";
			  for (var i=0; i < result.length; i++) {
				  if(result[i].Blog_topic_id != ""){
		 		  	var BlogDetails = result[i].Comments;
		 		  	var Author = result[i].Email;
		 		  	var date = result[i].Timestamp;
		 		  	if(Author == undefined){
				    comment.innerHTML = "<p>"+noComments+"</p><hr style ='color: #07AA53;border: dotted 1px;'>";
		 		  	}
		 		  	else{
				    comment.innerHTML = comment.innerHTML + "<p>"+BlogDetails+"</p><p style='font-size:9px;margin: 10px 0 10px;color: #07AB54;'>Author : "+ Author +" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted on : "+date+"<br><hr style ='color: #07AA53;border: dotted 1px;'>";
		         }
		          }
				 else{
				 	console.log('unable');
			  }
			   };	
				//comment.innerHTML = comment.innerHTML;
			},
			error:function(msg){
				    comment.innerHTML = "<p>"+noComments+"</p><hr style ='color: #07AA53;border: dotted 1px;'>";
			
			}
		})
	return false;	
})
$('li.blog_topic a').click(function(){
	var current = $(this).closest("li.blog_topic");
	var topic = current.find("input.blogTopicId").val();
	var description = document.getElementById('BlogDescription');
	var Topicdescription = document.getElementById('BlogTopic');
	var topicid = parseInt(topic);
    var link = 'blog/getBlogDescription/'+topicid;
    		$.ajax({
			url:link,
			type:"POST",
			datatype:"json",
			cache:false,
			data:{},
			success:function(result){
				var result =JSON.parse(result);
				for (var i=0; i < result.length; i++) {				  
		 		  	var BlogDetails = result[i].details;
		 		  	var BlogTopic = result[i].Topic;
				    description.innerHTML = BlogDetails;
				    Topicdescription.innerHTML = BlogTopic;
				    $('input.topicid').val(result[i].Blog_topic_id);
				   }
	},
			error:function(msg){
				console.log(msg);
			}
		})
	return false;	
})
// $('input.newCmt').click(function(){
	// var current = $(this).closest("li.blog_topic");
	// var topic = $('input.topicid').val();
	// var useremail = $('input#useremail').val();
	// var newcomment = $('textarea#comments').val();
	// var topicid = parseInt(topic);
	// console.log(topicid);
	// var currentdate = new Date();
	// var datetime = currentdate.getFullYear() + "/"+currentdate.getMonth() + 1 + "/" + currentdate.getDay() +" "+ currentdate.getHours() + ":" + currentdate.getMinutes() + ":" + currentdate.getSeconds();
    // var link = 'blog/setComment/'+topicid;
    		// $.ajax({
			// url:link,
			// type:"POST",
			// datatype:"json",
			// cache:false,
			// data:{"comment":newcomment},
			// success:function(result){
				// console.log(result);
				// if(comment.innerHTML != '<p>No Comments Available</p><hr style="color: #07AA53;border: dotted 1px;">')
				// {
				// comment.innerHTML = comment.innerHTML+"<p>"+newcomment+"</p><p style='font-size:9px;margin: 10px 0 10px;color: #07AB54;'>Author : "+useremail+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted on : "+ datetime + "</p><hr style ='color: #07AA53;border: dotted 1px;'>";
				// $('textarea#comments').val("");
				// }
				// else
				// {
				// comment.innerHTML = "<p>"+newcomment+"</p><p style='font-size:9px;margin: 10px 0 10px;color: #07AB54;'>Author : "+useremail+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted on : "+ datetime + "</p><hr style ='color: #07AA53;border: dotted 1px;'>";
				// $('textarea#comments').val("");
// 					
				// }
	// },
			// error:function(msg){
				// console.log(msg);
			// }
		// })
	// return false;	
// })
}
)	

