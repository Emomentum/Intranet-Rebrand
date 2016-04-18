<html>
<head>
<?php $this->load->view('includes/scripts');?>
<?php //$this->load->view('includes/analyticTracking');?>
</head>
<body>

<?php 
	$this->load->view('includes/header');
	$this->load->view('includes/breadcrum');
?>
<div class="container">
    <div class="row">
	<div class="col-lg-12  service" id="service1">
		<div class="panel panel-default">
    			<div class="panel-heading">
            		  <span>Our Team</span>
    			</div> 
    			<div style ="padding: 13px 31px 6px 31px;text-align: justify;" id = "BlogDescription">
    			</div>                     
                          <!-- List group -->
  				
                        <!-- /.panel-body -->
       </div>
 <!-- /.panel -->
 	</div>
		<div class="col-lg-12  service" id="service1">
		<div class="panel panel-default">
    			<div class="panel-heading">
            		  <span>Public Folders</span>
    			</div> 
    			<div style ="padding: 13px 31px 6px 31px;text-align: justify;" id = "BlogDescription">
    			</div>                     
                          <!-- List group -->
  				
                        <!-- /.panel-body -->
       </div>
 <!-- /.panel -->
 	</div>
  </div><!--end of row -->
                  </div>
<?php $this->load->view('includes/footer');?>

</body>
</html>