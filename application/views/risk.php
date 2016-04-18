<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket10.config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket10.js"></script>
<?php $this->load->view('includes/scripts');?>
<style>
.shadow {
  width: 276px;
 
  text-align: center;
}

li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 36px;
}

li a span {
    width: 25px;
    margin: 0 auto;
}
li a:hover {
    background-color: #3E59A8;
	color:#ffffff;
	text-decoration:none;
	
}
li a:hover:after {
    border-left: solid transparent 10px;
    border-right: solid transparent 10px;
    border-top: solid #3E59A8 10px;
	text-decoration:none;
	color:#ffffff;
    bottom: -15px;
    content: " ";
    height: 0;
    left: 50%;
    margin-left: -13px;
    position: absolute;
    width: 0;
}

</style>
</head>
<body style="background-color:#f1f1f1;">
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
<?php $this->load->view('includes/nav');?>		

<div class="row content-department">
  <div class="col-sm-4 col-md-3">
    
  
    <h4>Team Targets</h4>
 
  <div class="panel-body">
  <ul>
  <li>Coming Soon</li>
  </ul>
   </div>


  </div><!--first col end-->
<?php
                          foreach ($employee as $employee):
                          ?>   
  <div class="col-sm-4 col-md-3">
   <div class="shadow">
    <div class="thumbnail" style="padding:0px;box-shadow: 0px 0px 18px 3px #888888;">
      <?php	
							 if($employee->photo_url == "")
						  {
							  ?>
				<img src = "https://storage.googleapis.com/emomentum_profile_pics/question.png" style="width:274px;height:250px;"/>
						 <?php
						 }else{?>
		       <img src = "https://storage.googleapis.com/emomentum_profile_pics/<?php echo $employee->photo_url?>" style="width:274px;height:250px;"/>
						 <?php
							 
						 }
                          	?>
      <div class="caption"  style="background-color:#CCC;text-align:left">
        <h4><?=$employee->First_Name?> <?=$employee->Last_Name?></h4>
        <p><?=$employee->Position?></p>
		<p><? $num = $employee->Phone_number;
            if ($num !== "") {
              echo substr_replace($num, "-", 4, 0);
            }else{

              } ?>
   </p>        
      </div>
    </div>
	</div>
  </div><!--first col end-->
<?php endforeach; ?>
<!--first col end-->
</div>  <!--first row end-->	

<hr/>


<div class="row team-documents">
    <div class="col-sm-4 col-md-12">	
	    <h4 style = "text-align:center">Team Documents</h4>		
<div id="jstree-gcs-demo" class="well" style = "border: 0px;min-height: 0px;padding: 0px;margin: 0px;border-radius: 0px;"></div>
  
 		<div id = "album_list"></div>
   	                
  </div>
  </div>
<hr  class = "col-lg-12" style="margin-top: 0px;"/>
		<div class="col-lg-12  service" id="service1">
		<div align="left"    width="auto" style="margin-top: 20px;margin-right:20px">
            		   <span><h4 style="color:#000000" >Private Folders</h4></span>
    			</div> 
    			
		<div>
    			<iframe src="https://drive.google.com/embeddedfolderview?id=0B8LAEf9-mnI5YkVwQjMwVmNCU00&usp=sharing#grid" width="700" height="320" frameborder="0"></iframe>
				
				<br>
				
				<img src="https://console.developers.google.com/m/cloudstorage/b/emomentum_profile_pics/o/driveicon.png" style="width:18px;height:22px;"><a href="https://drive.google.com/drive/folders/0B8LAEf9-mnI5YkVwQjMwVmNCU00" target="_blank" style="color: #3E59A8;" style="width:64px;height:64px;">Open in Drive</a>
				</div>

	
 <!-- /.panel -->
 	</div>  </div>
<?php 
$this->load->view('includes/footer');
}
?>
</body></html>