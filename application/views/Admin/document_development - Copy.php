<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	$this->load->view('includes/header');
	$this->load->view('includes/breadcrum');
?>
<script src="<?php echo base_url();?>assets/bower_components/jquery/jquery.min.js"></script>
<?php $this->load->view('includes/scripts');?>
<!-- The styles -->
<link href="<?php echo base_url();?>assets/css/charisma-app.css" rel="stylesheet">
<link href='<?php echo base_url();?>assets/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>

    <!-- jQuery -->


</head>

<body>
<div class="container">
    <div class="row">
	<div class="col-lg-8  service" id="service1">
		<div>
    			<div>
            		  <span><u><h4><?=$album_name;?> Documents [<?=$photo_counter - 1?>]</h4></u></span>
    			</div> 
    			<div>
					<div>
						<div>
						
				   
                <div>
                	<div style = "float:left;">
<?php
													for($i=1;$i<$photo_counter;$i++)
														{
														$ds = $album_items[$i];	
														$image = $image_url.$ds->name;
														$name = str_replace($album_name.'/'," ",$ds->name);
														//echo "<img src = 'img/document.png ' width = '150' style = 'margin:20px;' class='grayscale'>".$ds->name;
													?>
													
													<div style = "float:left;width:120px;">
														<a style="background:url(<?=$image;?>)" href="<?=$image;?>">
														<img class="grayscale" style = "width:100px" src="http://emomentum_extension.storage.googleapis.com/document.png"><?=$name?>
														</a>
													</div>	
												
                               
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
	
?>
  <!--end of row -->
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