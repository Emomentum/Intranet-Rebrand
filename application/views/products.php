<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket8.config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket8.js"></script>
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
<?php $this->load->view('includes/nav_bus');?>	

<div class="row content-department">
  <div class="col-sm-4 col-md-3" style = "box-shadow: 0px 0px 18px 3px #888888;">
    
  
    <h4>Team Targets</h4>
 
  <div class="panel-body">
  <ol>
      <li>NEW BUSINESS WEIGHTING OF $1,486,000
            <ol style = "list-style-type: lower-alpha;">
                <li>Business Intelligence   10%</li>
                <li>Microsoft exclusive of Azure 15%</li>
                <li>Google 12%</li>
                <li>Security 10%</li>
                <li>CRM 5%</li>
                <li>Development 1.0 services 10%</li>
                <li>Consultancy 10%</li>
                <li>AWS/Softlayer/Azure 10%</li>
                <li>Development 2.0 solutions 5%</li>
                <li>Tenders and Projects 8%</li>
	             <li>Support services 5%</li>
            </ol>
      </li>
      <li>NEW PARTNERS PER A YEAR
            <ol style = "list-style-type: lower-alpha;">
                <li>4 New Partners per annum</li>
	            <li>4 New Products per annum</li>
            </ol>
      </li>
  </ol>
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
  </div>  </div>
<?php 
$this->load->view('includes/footer');
}
?>
</body></html>