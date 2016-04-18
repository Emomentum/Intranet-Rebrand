<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('Admin/includes/header');?>
<?php //$this->load->view('includes/analyticTracking');?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>AdminAssets/js/metabucket.config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>AdminAssets/js/metabucket.js"></script>
</head>
<body>
    <div id="wrapper">
<?php $this->load->view('Admin/includes/navigation');?>

      <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       
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
               

                   
                </div>

    <!-- /#wrapper -->
<?php $this->load->view('Admin/includes/scripts');?>

</body>

</html>

