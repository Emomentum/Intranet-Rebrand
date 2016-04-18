<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket2.config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket2.js"></script>
<?php $this->load->view('includes/scripts');?>
<style>
</style>
<?php
	    if($this->session->userdata('access_level')==FALSE){

	    $this->load->view('login');
				}
		else{
		?>
<body style="background-color:#f1f1f1;">	
	<div class="body_holder">
	<!----------------Header------------->

	<?php $this->load->view('includes/header');?>
	
<!----------------service------------->
 
	<div class="">
		 <div class="container">
				<header>
	
					<div class="container">
	<div class="row">
	
		
	<div class="col-sm-4 col-md-8 col-md-offset-2">
		<nav class="navbar navbar-default search-tab" style="background-color:#F7C116;">
			<li><span id="search-tab-head"><h4>Sort</h4></span></li>
			<li>
				<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Date <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#"></a></li>
   
  </ul>
</div>
			</li>

			<li>
			</li>

			   

	    </nav>
  </div>
	 </div><!-- end of nav-->
					 </div>

	 </header>

		<div class="row content-department">
			    <div style ="padding: 36px 31px 31px 31px;;text-align: justify;">
					<div id="jstree-gcs-demo" class="well" style = "border: 0px;min-height: 0px;padding: 0px;margin: 0px;border-radius: 0px;"></div>   
						<div id = "album_list"></div>					
    			</div> 
		</div>
		</div>
	
		</div>
<?php $this->load->view('includes/footer');?>
</div>
<?php
}
?>
</body>
</html>