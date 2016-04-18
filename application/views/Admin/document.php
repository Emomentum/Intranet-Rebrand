<!DOCTYPE >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- The styles -->
<link href="<?php echo base_url();?>assets/css/charisma-app.css" rel="stylesheet">
<link href='<?php echo base_url();?>assets/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
<script src="<?php echo base_url();?>assets/bower_components/jquery/jquery.min.js"></script>
<?php $this->load->view('includes/scripts');?>
<?php //$this->load->view('includes/analyticTracking');?>
<?php 
	$this->load->view('includes/header');
	$this->load->view('includes/breadcrum');
?>
</head>
<body>
<div class="container">
    <div class="row">
	<div class="col-lg-8  service" id="service1">
		<?php 
    				$album_name = str_replace("%20"," ","$album_name")
    				
    				?>
		<div>
    			<div>
            		  <span><h4><img src = "http://emomentum_extension.storage.googleapis.com/folder.png" width = "26" style = "margin-top:-9px;"/>&nbsp;&nbsp;<?=$album_name;?> Documents [<?=$photo_counter - 1?>]</h4></span>
    			</div> 
    			<div>
					<div>
						<div>
						
				   
                <div>
                	<div style = "float:left;margin-top:30px;">
<?php
													for($i=1;$i<$photo_counter;$i++)
														{
														$ds = $album_items[$i];	
														$image = $image_url.$ds->name;
														$name = str_replace($album_name.'/'," ",$ds->name);
														$names= substr($name,-3);
												     $pdf="pdf";
													 $ocx="ocx";
													 $ppt="ptx";
													 
													 if($names==$pdf){
														 ?>
                                                         <div style = "float:left;width:152px;text-align:center;height:211px;">
														<a style="background:url(<?=$image;?>)" href="<?=$image;?>">
														<img  style = "width:100px;height:100px;" src="http://emomentum_extension.storage.googleapis.com/pdf.png">
														<p style = "text-align:center;width:100%;padding: 17px;"><?=$name?></p>
														</a>
													</div>	
												
													<?php
													 }
													 elseif($names==$ocx){
														?>
														<div style = "float:left;width:152px;text-align:center;height:211px;">
														<a style="background:url(<?=$image;?>)" href="<?=$image;?>">
														<img  style = "width:100px;height:100px;" src="http://emomentum_extension.storage.googleapis.com/word.png">
														<p style = "text-align:center;width:100%;padding: 17px;"><?=$name?></p>
														</a>
													</div>	
												
														 
												<?php
												
													 }
														
													elseif($names==$ppt){													
													?>
													<div style = "float:left;width:152px;text-align:center;height:211px;">
														<a style="background:url(<?=$image;?>)" href="<?=$image;?>">
														<img  style = "width:100px;height:100px;" src="http://emomentum_extension.storage.googleapis.com/ppt.png">
														<p style = "text-align:center;width:100%;padding: 17px;"><?=$name?></p>
														</a>
													</div>	
												
													<?php
													}
													?>
													
													
												
                               
                    <?php
														}
                    ?>
													
													
                   
                     
					</div>
					<p style = "padding-left:37px;"> </p>
								
                </div>
              
  </div>
    			</div>    
       </div>
 <!-- /.panel -->
 	</div>


  </div>
                    <?php 
	$this->load->view('includes/aside');
?>
  <!--end of row -->
                  </div>
				  </div>

<!-- library for cookie management -->
<script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
<!-- select or dropdown enhancer -->
<script src="<?php echo base_url();?>assets/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url();?>assets/bower_components/colorbox/jquery.colorbox-min.js"></script>

<!-- star rating plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url();?>assets/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url();?>assets/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url();?>assets/js/charisma.js"></script>
<?php $this->load->view('includes/footer');?>
</body>
</html>