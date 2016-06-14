	<html>
<head>
<?php $this->load->view('includes/scripts');?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
</head>
<body>
<div class="body_holder">
<?php 
	$this->load->view('includes/header');
?>
<div class="container">

   
					 <?php
    	
						foreach ($event as $row ) {
							$title= $row->Topic;
							$id= $row->Blog_topic_id;
							$content=$row->details;
							$posted=$row->Timestamp;
							$type = $row->Blog_type_ID;
							$image =$row->photo_url;
					?>
					
						<div class="row">
	
		
	<div class="col-sm-4 col-md-8 col-md-offset-2">
		<nav class="navbar navbar-default search-tab">
			<li><span id="search-tab-head"><h4><?php echo $title;?></h4></span></li>
			<li>
				<!-- Single button -->
			</li>

			   

	    </nav>
  </div>
	 </div><!-- end of nav-->
					
				 <div class="row">

					 <div class="col-sm-4 col-md-8 col-md-offset-2" id="service1">
					
                          <!-- List group -->	
	
				
					     <?php	
			if($image == "")
				{
				?>
				<div class = "col-sm-4 col-md-8 col-md-offset-2" style = "background-color:#fff">
				<img src = "https://storage.googleapis.com/emomentum_profile_pics/question.png" alt="..." style ="position:relative;"/>
						 <?php
						 }else{?>
					<img style = "width:750px;height: 311px;" src = "https://storage.googleapis.com/emomentum_announcements/<?php echo $image?>" alt="..." style ="position:relative;">
						 <?php
							 
						 }
                          	?>	
					
					<input type = "hidden" class = "news_id" value = "<?php echo $id; ?>" name = 'blog_topic_id'/>
					<input type = "hidden" class = "news_id" value = "<?php echo $type; ?>" name = 'blog_type_id'/>
				</div>
				<div class = "col-sm-4 col-md-8 col-md-offset-2" style = "background-color:#fff;padding: 10px;border-radius: 5px;margin-top: 10px;">
					<p style = "text-align:justify">
					<?php
						echo "<b>Posted On: </b>".$posted."<br /><br />";
						echo '<p>'.$content.'</p>';
						
                    ?>
					</p>
				</div>
				
					<?php }?>
				
             
                       </div>
                   </div>
                   <hr style = "border: solid 1px;color: cfcfcf;">
                   <div class = "row">
                   		<div class="col-sm-4 col-md-8 col-md-offset-2" id="service1">
                   			<p style = "text-align:justify">
                   				<b>Comments</b>
                   			</p>
                   		</div>
                   		<?php
                   		if (empty($comments)){
                   			?>
                   			<div class="col-sm-4 col-md-8 col-md-offset-2" id="service1" style = "text-align:justify;background-color: #fff;margin-top:5px;padding-top: 10px;padding-bottom:10px;border-radius: 5px; ">
                   					<p>No Comments Available</p>
                   				</div>
                   				<?php
                   		}
						else{
                   		?>
                   		  <?php foreach ($comments as $row) : ?>
                   				<div class="col-sm-4 col-md-8 col-md-offset-2" id="service1" style = "text-align:justify;background-color: #fff;margin-top:5px;padding-top: 10px;padding-bottom:10px;border-radius: 5px; ">
                   					<p><?php echo $row->Comments?></p>
                   					<hr>
                   					<span style ="color:cfcfcf"><small>Time posted: <?php echo $row->Timestamp?></span></small><br>
                   					<span style ="color:cfcfcf"><small>Posted By: <?php echo $row->Email?></small></span>
                   				</div>
                   				<?php 
                   				endforeach;
                   				}
                   				?>
                   				<?php echo form_open('home/setComments/'.$id.'/'.$type)?>
                   		<div class="col-sm-4 col-md-8 col-md-offset-2" id="service1" style = "padding-top: 10px;padding-left: 0px;padding-right: 0px;">
                   			
                   			<textarea rows="5" class = "form-control" required = "true" name = "comments">
                   				
                   			</textarea>
                   		</div>
                   			<div class="col-sm-4 col-md-8 col-md-offset-2" id="service1" style = "margin-top:10px">
                   			<input type = "submit" style = "float:left"/>
                   				
                   		</div>
                   	</form>
                   	
                   </div>
                  </div>
<?php $this->load->view('includes/footer');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body></html>






