<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
	<link href="<?php echo base_url();?>assets2/css/charisma-app.css" rel="stylesheet">
<link href='<?php echo base_url();?>assets2/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
</head>
<style>
.modal-dialog {width:600px;}
.thumbnail {
	width:204px;
	height:195px;
	border:0px;
	}

.body{
	padding-top:0px;
}


#lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}

#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    
    z-index:1032;
}

.shadow {
  width: 204px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
.thumbnail img, .thumbnail > a {
    z-index: 2;
    height: 0px;
    width: 0px;
    position: relative;
    display: block;
	visibility:invisible;
}
</style>
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
		<div class="row">
		<div class="col-sm-4 col-md-3"></div>
	<div class="col-sm-4 col-md-6">
	  <table class="table" style="background-color:#F7C116;">
    <tbody>
	<tr>
	   
		<td>
		   <span id="search-tab-head"><h4>Sort</h4></span>
			</td>
			<td>
				<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Event <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
			</td>

			<td>
				<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Date <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
			
			</td>

			   

	    </nav>
		</tr>
		</tbody>
		</table>
  </div>
  
		
	 <!-- end of nav-->
    <div class="container">

        <div class="row">
		<div class="col-lg-8  service" id="service1" style="margin-left:6%;">
		<div>
			<?php 
    				$album_name = str_replace("%20"," ","$album_name")
    				
    				?>
    			
    			<div style = "margin-top:30px">
					<div>
						<div>
						
				   
                <div>
                	<div>
					<ul class="thumbnails gallery" style="width:144%;">
                    	
                                                  
													<?php
													for($i=1;$i<$photo_counter;$i++)
														{
														$ds = $album_items[$i];	
														$image = $image_url.$ds->name;
													
													?>
													
													<li id="<?='image-'.$i?>" class="thumbnail">
														<a style="background:url(<?=$image;?>)" href="<?=$image;?>">
														<div class ="shadow">
														<img style = "height:195px;width:204px;"src="<?=$image;?>" alt="<?=$album_name.$i?>"></a>
														</div>
													</li>
                               
                    <?php
														}
                    ?>
                     
                                            </ul>
											
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
			
        </div>
		</div>
	
		
		<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
			<div class="modal-footer">
		<button class="btn" data-dismiss="modal">Close</button>
	</div>
        </div>
    </div>
</div>
		
		</div>
  </div>
<?php $this->load->view('includes/footer');?>
 <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<?php
	}
?>
</body>
<script  type="text/javascript">
		$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});

</script>
<!-- library for cookie management -->
<script src="<?php echo base_url();?>assets2/js/jquery.cookie.js"></script>
<!-- select or dropdown enhancer -->
<script src="<?php echo base_url();?>assets2/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url();?>assets2/bower_components/colorbox/jquery.colorbox-min.js"></script>

<!-- star rating plugin -->
<script src="<?php echo base_url();?>assets2/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url();?>assets2/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url();?>assets2/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url();?>assets2/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url();?>assets2/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url();?>assets2/js/charisma.js"></script>
</body></html>