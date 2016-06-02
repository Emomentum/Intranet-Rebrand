<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket.config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket.js"></script>
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
    li a:hover{
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
	    if($this->session->userdata('email')==FALSE){

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
<?php $this->load->view('includes/nav_operation');?>	

<div class="row content-department">
  <div class="col-sm-4 col-md-3" style = "box-shadow: 0px 0px 18px 3px #888888;">
    
  
    <h4>Team Targets</h4>
 
  <div class="panel-body">
  <ol dropzone="">
  <li>DEVELOPMENT DEALS PER A YEAR 3</li>
   <li>RESEARCH AND DEVELOPMENT PRODUCT PER A YEAR 1</li>
  </ol>
   </div>


  </div><!--first col end-->
<?php
                          foreach ($employee as $employee):
						   $position =  $employee->Position;
						 if (strpos($position,'Team Lead') !== false) 
						 {
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
							
							} ?></p>
      </div>
    </div>
	</div>
  </div><!--first col end-->
<?php 
						 }
						 endforeach; 
                
						  foreach ($otheremployee as $otheremployee):
						   
						 $position2 =  $otheremployee->Position;
						 if (strpos($position2,'Team Lead') == false) 
						 {
						 
						 ?>
						   <div class="col-sm-4 col-md-3">
   <div class="shadow">
    <div class="thumbnail" style="padding:0px;box-shadow: 0px 0px 18px 3px #888888;">
      <?php	
							 if($otheremployee->photo_url == "")
						  {
							  ?>
				<img src = "https://storage.googleapis.com/emomentum_profile_pics/question.png" style="width:274px;height:250px;"/>
						 <?php
						 }else{?>
		       <img src = "https://storage.googleapis.com/emomentum_profile_pics/<?php echo $otheremployee->photo_url?>" style="width:274px;height:250px;"/>
						 <?php
							 
						 }
                          	?>
      <div class="caption"  style="background-color:#CCC;text-align:left">
        <h4><?=$otheremployee->First_Name?> <?=$otheremployee->Last_Name?></h4>
        <p><?=$otheremployee->Position?></p>
		<p><? $num = $otheremployee->Phone_number;
						if ($num !== "") {
							echo substr_replace($num, "-", 4, 0);
						}else{
							
							} ?></p>   
      </div>
    </div>
	</div>
  </div><!--first col end-->
<?php 
						 }
						 endforeach;
						 ?>
<!--first col end-->
</div>  <!--first row end-->	

<hr/>


<div class="row team-documents">
    <div class="col-sm-4 col-md-12">	
	    <h4 style = "text-align:center">Team Documents</h4>		
<div id="jstree-gcs-demo" class="well" style = "border: 0px;min-height: 0px;padding: 0px;margin: 0px;border-radius: 0px;"></div>
  
 		<div id = "album_list"></div>
   	                
  </div>
  </div>  </div>
<?php 
$this->load->view('includes/footer');
}
?>
</body></html>