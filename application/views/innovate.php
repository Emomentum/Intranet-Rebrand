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
	 <div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><h3>Coming Soon</h3></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
 <div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><h3></h3></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
 <div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><h3></h3></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
<div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><h3></h3></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
<div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><h3></h3></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
<div class="row post">
	<div class="col-sm-4 col-md-5"></div>

	<div class="col-sm-4 col-md-2"><h3></h3></div>
	<div class="col-sm-4 col-md-5"></div>
</div>
</div>
<?php 
$this->load->view('includes/footer');
}
?>
</body></html>