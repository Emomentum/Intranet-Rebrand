<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
</head>
<body>	
	<?php
	    if($this->session->userdata('access_level')==FALSE){

	    $this->load->view('login');
				}
		else{
		?>
		
	<div class="body_holder">
	<!----------------Header------------->

	<?php $this->load->view('includes/header');?>
	
<!----------------service------------->
 
	<div class="">
		<div class="container">
			<div class="row">
    			<div class="col-lg-8">
    			 	<div class="panel panel_announcement">
                        <div class="panel-heading pull-right heading-announcement">
                            Announcements <span class = "direction-arrow">></span>
                        </div><!-- List group -->
						<!-- 	<ul class="list-group">
								<li class="list-group-item"></li> 
							</ul><!-- /.panel-body -->
							
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="6000" style = "padding:15px;position:absolute;bottom:0px">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								  </ol>								 
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
							   <?php
    								   $counter = 1;
										foreach ($announcement as $object ) {
											
											
											
											$type=1;
											$title1= $object->Topic;
											$title= substr($title1, 0, 35);
											$id=$object->Blog_topic_id;
											$details= $object->details;
											$topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');
											$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
										
										  
										  $string = strip_tags($details);

									if (strlen($string) > 100) {

										// truncate string
										$stringCut = substr($string, 0, 99);

										// make sure it ends in a word so assassinate doesn't become ass...
										$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
									} 		
									if($counter==1){
										?>
												<div class="item active">
									  <img src="http://placehold.it/1200x315" style = "opacity:0" alt="...">
									  <div class="carousel-caption" style = "text-align:left;left:0px;width:100%">
										  <h3 style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;><?php echo $topic;?></h3>
										  <p><?php echo $string;?></p>
										  
									  </div>
									</div>
									<?php
									}
								else{     
										?>
										<div class="item">
									  <img src="http://placehold.it/1200x315" style = "opacity:0" alt="...">
									  <div class="carousel-caption" style = "text-align:left;left:0px;width:100%">
										  <h3 style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;><?php echo $topic;?></h3>
										  <p><?php echo $string;?></p>
										  
									  </div>
									</div>
									
										<?php
								}
										$counter++;
										}
										?>
								  </div>
								
								</div> <!-- Carousel -->
							
							
							
							
                    </div><!-- /.panel -->
				</div>                
				<div class="col-lg-4">
					<div class="panel panel_communications">
                        <div class="panel-heading pull-right heading-communications">
                            Communications<span class = "direction-arrow">></span>
                        </div>
                        <div class = "communications" style = "padding:15px;position:absolute;bottom:0px">
													 <?php
													 $counter = 0;
									
								foreach ($communications as $object ) {
									$counter++;
									$type=2;
									$title1= $object->Topic;
									$title= substr($title1, 0, 35);
									$id=$object->Blog_topic_id;
									$details= $object->details;
									$topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');		
									$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
								

							$string = strip_tags($details);

							if (strlen($string) > 100) {

								// truncate string
								$stringCut = substr($string, 0, 99);

								// make sure it ends in a word so assassinate doesn't become ass...
								$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
							}  	
								?>
								
								<p style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;><?=$topic?></p>
								<p><?=$string?></p>
								<?php
								if($counter == 1){
									break;
								}
								}
								?>
						
					</div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
			</div>
			<div class="row">
    			<div class="col-lg-4">
    			 	<div class="panel panel_upcoming">
                        <div class="panel-heading pull-right heading-upcoming">
                            Upcoming Events
                        </div>
                        <div class = "communications" style = "padding:15px;position:absolute;bottom:0px">
                         <?php
		
		
		
	foreach ($upcoming as $object ) {
		$type=4;
		$title1= $object->Topic;
		$title= substr($title1, 0, 45);
		$details= $object->details;
		$id=$object->Blog_topic_id;
		$start= $object->Start_Date;
		$end=$object->End_Date;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');
		
	?>
								
								<p style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;><?=$topic?></p>
								<p>Starts on: <?=$start?> and Ends On: <?=$end?></p>
								<?php 
	
	}
	?>
	</div>
                    </div><!-- /.panel -->
				</div>                
				<div class="col-lg-4">
					<div class="panel panel_news">
                        <div class="panel-heading pull-right heading-news">
                            News Feeds
                        </div>
						                        <div class = "communications" style = "padding:15px;position:absolute;bottom:0px">
                         <?php
		
		
		
	foreach ($upcoming as $object ) {
		$type=4;
		$title1= $object->Topic;
		$title= substr($title1, 0, 45);
		$details= $object->details;
		$id=$object->Blog_topic_id;
		$start= $object->Start_Date;
		$end=$object->End_Date;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');
		
	?>
								
								<p style = "font-weight: 600;font-size: 36px;text-decoration: none;color: #fff;width:299px;margin-bottom:160px;margin-left:39px">Coming Soon</p>
								
								<?php 
	
	}
	?>
	</div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
								<div class="col-lg-4">
                
					<div class="panel">
                        <div class = "Processes">
                        <div class="panel-heading pull-center heading-processes">
                            Processes
                        </div>   
                        <div style = "font-weight: 600;" class = "processes-list"><a href="http://mailchimp.com/" target="_blank" style = "color:white;">MailChimp</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://emomentum.sugarondemand.com" target="_blank" style = "color:white;">Sugar CRM</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://www.projectmanager.com/" target="_blank" style = "color:white;">Projectmanager.com</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="http://uk.qbo.intuit.com/" target="_blank" style = "color:white;">Quickbooks</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://people.zoho.com/people/#home/feeds" target="_blank" style = "color:white;">Zoho People</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://emomentuminteractive.freshdesk.com/" target="_blank" style = "color:white;">Freshdesk</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="http://emomentum-interactive.com/" target="_blank" style = "color:white;">Our Website</a></div>
                    </div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
			</div>
		</div>
  </div>
<?php $this->load->view('includes/footer');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<?php
}
?>
</body></html>