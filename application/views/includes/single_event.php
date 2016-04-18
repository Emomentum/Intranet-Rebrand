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
				<div class = "col-sm-4 col-md-8 col-md-offset-2" style = "Background-color:#fff">
				<img src = "https://storage.googleapis.com/emomentum_profile_pics/question.png" alt="..." style ="position:relative;"/>
						 <?php
						 }else{?>
					<img style = "width:750px;height: 311px;" src = "https://storage.googleapis.com/emomentum_announcements/<?php echo $image?>" alt="..." style ="position:relative;">
						 <?php
							 
						 }
                          	?>	
					
					<input type = "hidden" class = "news_id" value = "<?php echo $id; ?>" name = 'blog_topic_id'/>
				</div>
				<div class = "col-sm-4 col-md-8 col-md-offset-2">
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
                  </div>
<?php $this->load->view('includes/footer');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body></html>






