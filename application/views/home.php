<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>	
	<div class="body_holder">
	<!----------------Header------------->

	<?php $this->load->view('includes/header');?>
	
<!----------------service------------->
 
	<div class="">
		<div class="container">
			<div class="row">
    			<div class="col-lg-8">
    			 	<div class="panel panel_announcement">
                        <div class="panel-heading pull-right heading-announcement">
                            Announcements <span class = "direction-arrow">></span>
                        </div><!-- List group -->
						<!-- 	<ul class="list-group">
								<li class="list-group-item"></li> 
							</ul><!-- /.panel-body -->
                    </div><!-- /.panel -->
				</div>                
				<div class="col-lg-4">
					<div class="panel panel_communications">
                        <div class="panel-heading pull-right heading-communications">
                            Communications<span class = "direction-arrow">></span>
                        </div><!-- List group 
						<ul class="list-group">
							<li class="list-group-item"></li>
						</ul>-->
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
			</div>
			<div class="row">
    			<div class="col-lg-4">
    			 	<div class="panel panel_upcoming">
                        <div class="panel-heading pull-right heading-upcoming">
                            Upcoming Events
                        </div>
                    </div><!-- /.panel -->
				</div>                
				<div class="col-lg-4">
					<div class="panel panel_news">
                        <div class="panel-heading pull-right heading-news">
                            News Feeds
                        </div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
								<div class="col-lg-4">
                
					<div class="panel">
                        <div class = "Processes">
                        <div class="panel-heading pull-center heading-processes">
                            Processes
                        </div>                   
                        <div class = "processes-list">MailChimp</div>
                        <div class = "processes-list">Sugar CRM</div>
                        <div class = "processes-list">Projectmanager.com</div>
                        <div class = "processes-list">Quickbooks</div>
                        <div class = "processes-list">Zoho People</div>
                        <div class = "processes-list">Freshdesk</div>
                        <div class = "processes-list">Our Website</div>
                    </div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
			</div>
		</div>
  </div>
<?php $this->load->view('includes/footer');?>

</body></html>