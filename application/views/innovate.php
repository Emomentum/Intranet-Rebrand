<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>	
	<div class="body_holder">
	<!----------------Header------------->

<?php $this->load->view('includes/header');?>

<div class="container">

	<div class="row">
	
		
	<div class="col-sm-4 col-md-8">
		<nav class="navbar navbar-default search-tab">
			<li><span id="search-tab-head"><h4>Sort</h4></span></li>
			<li>
				<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Category <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
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
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
			</li>

			   

	    </nav>
  </div>
	 </div><!-- end of nav-->
<div class="row">
	<?php foreach($blogDetails as $BlogDetails){
		
		$title= $BlogDetails->Topic;
		$id=$BlogDetails->Blog_topic_id;
		$details= $BlogDetails->details;
        $topic= anchor('blog/details/'.$id.'',''.$title.'');		
		$readmore=anchor('blog/details/'.$id.'','Read More',array('style'=>'color:green'));
		//$dateTime = $BlogDetails->Timestamp;
		$dateTime = date('M j Y',strtotime($BlogDetails->Timestamp));
		$year = date('Y',strtotime($BlogDetails->Timestamp));
		$month = date('M',strtotime($BlogDetails->Timestamp));
		$day = date('j',strtotime($BlogDetails->Timestamp));
		//echo date('M j Y g:i A', strtotime('2010-05-29 01:17:35'));
		$this->load->model('blog_model');
		$comments=$this->blog_model->getCommentsNo($BlogDetails->Blog_topicID);  
	

$string = strip_tags($details);

if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 100);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
}?>
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail" style = "min-height:353px;">
     <div class = "thumbnail" style = "border: 0px solid #ddd;padding: 0px;margin-bottom: 0px;"> 
	 <img src="<?php echo base_url();?>assets/images/announcements.jpg" alt="..." style ="position:relative;">
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
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail" style = "min-height:353px;">
      <img src="<?php echo base_url();?>assets/images/announcements.jpg" alt="...">
      <div class="caption">
        <h4>Try being authentic</h4>
        <p>What makes your business unique? Determining this could help you stand out from the crowd and give you..</p>
        
      </div>
    </div>
  </div><!--first col end-->

  <div class="col-sm-3 col-md-3">
    <div class="thumbnail" style = "min-height:353px;">
      <img src="<?php echo base_url();?>assets/images/announcements.jpg" alt="...">
      <div class="caption">
        <h4>Try being authentic</h4>
        <p>What makes your business unique? Determining this could help you stand out from the crowd and give you..</p>
        
      </div>
    </div>
  </div><!--first col end-->

  <div class="col-sm-3 col-md-3">
    <div class="thumbnail" style = "min-height:353px;">
      <img src="<?php echo base_url();?>assets/images/announcements.jpg" alt="...">
      <div class="caption">
        <h4>Try being authentic</h4>
        <p>What makes your business unique? Determining this could help you stand out from the crowd and give you ..</p>
        
      </div>
    </div>
  </div><!--col end-->
  <div class="col-sm-3 col-md-3" >
    <div class="thumbnail" style = "min-height:353px;">
      <img src="<?php echo base_url();?>assets/images/announcements.jpg" alt="...">
      <div class="caption">
        <h4>Try being authentic</h4>
        <p>What makes your business unique? Determining this could help you stand out from the crowd and give you..</p>
        
      </div>
    </div>
  </div><!--first col end-->

  <div class="col-sm-3 col-md-3">
    <div class="thumbnail" style = "min-height:353px;">
      <img src="<?php echo base_url();?>assets/images/announcements.jpg" alt="...">
      <div class="caption">
        <h4>Try being authentic</h4>
        <p>What makes your business unique? Determining this could help you stand out from the crowd and give you ..</p>
        
      </div>
    </div>
  </div><!--first col end-->

  <div class="col-sm-3 col-md-3">
    <div class="thumbnail" style = "min-height:353px;">
      <img src="<?php echo base_url();?>assets/images/announcements.jpg" alt="...">
      <div class="caption">
        <h4>Try being authentic</h4>
        <p>What makes your business unique? Determining this could help you stand out from the crowd and give you..</p>
        
      </div>
    </div>
  </div><!--first col end-->
</div>  <!--first row end-->

<div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><li><button type="button" class="btn btn-warning ">Load more posts</button></li></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
</div>
<?php $this->load->view('includes/footer');?>




</body></html>