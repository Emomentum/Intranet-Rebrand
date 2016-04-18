<html>
<head>
     <link href="<?php echo base_url();?>assets2/css/metabucket.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets2/js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/jquery.jstree.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket2.config.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/metabucket2.js"></script>
	
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
<body>	
	
	<!----------------Header------------->

	<?php $this->load->view('includes/header');?>
	
<!----------------service------------->
 

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
  </div>
  
		
	 <!-- end of nav-->
    <div class="container">
	 <div class="row">

		<div class="col-lg-8  service" id="service1">
		<div>
    			<div>
            		   <span><u><h4></h4></u></span>
    			</div> 
    			<div style ="padding: 36px 31px 31px 31px;;text-align: justify;">
    <div id="jstree-gcs-demo" class="well" style = "border: 0px;min-height: 0px;padding: 0px;margin: 0px;border-radius: 0px;"></div>
   
	    <div class="row">
	  <div id = "album_list"></div>
    </div>
   
					<!--<iframe style = "max-width:1045px;width:100%;background-color: #fff;" src = "https://drive.google.com/embeddedfolderview?id=0B4G2H5OFvlsmfjVJSVdPUjh6Y0ZiR29MMlE4UWk0RXFfYkdKaGZndUYtd2hkYUlBYzRCdk0#grid" width = "800" height = "281" frameborder = "0">
                    </iframe>
                      <a href = "https://drive.google.com/a/emomentum-interactive.com/folderview?hl=en&id=0B4G2H5OFvlsmfjVJSVdPUjh6Y0ZiR29MMlE4UWk0RXFfYkdKaGZndUYtd2hkYUlBYzRCdk0#grid" target ="_blank" style = "padding-bottom:8px;float:left"><img src = "https://cdn.rawgit.com/Emomentum/Jambojet/master/images/drive folder.png" width = "22"/>Open in drive</a> 
                -->

    			</div>                     
                          <!-- List group -->
  				
                        <!-- /.panel-body -->
       </div>
 <!-- /.panel -->
 	</div>
 	
  </div><!--end of row -->

      
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
		
		
<?php $this->load->view('includes/footer');?>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

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