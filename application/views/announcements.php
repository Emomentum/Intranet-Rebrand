<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
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

<div class="container">

	<div class="row">
	
		
	<div class="col-sm-4 col-md-8 col-md-offset-2">
		<nav class="navbar navbar-default search-tab">
			<li><span id="search-tab-head"><h4>Sort</h4></span></li>
			<li>
				<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Category <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#"></a></li>
   
  </ul>
</div>
			</li>

			<li>
				<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    time <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#"></a></li>

  </ul>
</div>
			</li>

			   

	    </nav>
  </div>
	 </div><!-- end of nav-->
<div class="row">
<?php
    	
	foreach ($events as $object ) {
		
		$title= $object->Topic;
		$id=$object->Blog_topic_id;
		$details= $object->details;
		//$photo_url = $object->photo_url;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');		
		$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
		$dateTime = date('M j Y',strtotime($object->Timestamp));
		$year = date('Y',strtotime($object->Timestamp));
		$month = date('M',strtotime($object->Timestamp));
		$day = date('j',strtotime($object->Timestamp));
	

$string = strip_tags($details);

if (strlen($string) > 100) {

    // truncate string
    $stringCut = substr($string, 0, 99);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
}?>
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail" style = "min-height:353px;">
     <div class = "thumbnail" style = "border: 0px solid #ddd;padding: 0px;margin-bottom: 0px;"> 
	     <?php	
			if($object->photo_url == "")
				{
				?>
				<img src = "https://storage.googleapis.com/emomentum_profile_pics/question.png" alt="..." style ="position:relative;"/>
						 <?php
						 }else{?>
					<img src = "https://storage.googleapis.com/emomentum_announcements/<?php echo $object->photo_url?>" alt="..." style ="position:relative;">
						 <?php
							 
						 }
                          	?>	
	  <h4 style = "position: absolute;top: 120px;left: 224px;background-color:#12A54A;color:#ffffff;padding:10px">
		<span style = "font-size:9px;"><?php echo $day." ".$month ?></span><br>
		<span style = "font-size:13px;font-weight:600px;"><?php echo $year?></span>
     </h4>
	  </div>
      <div class="caption">
        <h4 style = "font-weight:600px"><?php echo $topic;?></h4>
        <p><?php echo $string;?></p>
        
      </div>
    </div>
  </div><!--first col end-->
	<?php }
	?>

</div>  <!--first row end-->

<div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><li><button type="button" class="btn btn-warning ">Load more posts</button></li></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
</div>
<?php 

$this->load->view('includes/footer');
}
?>


</body></html>