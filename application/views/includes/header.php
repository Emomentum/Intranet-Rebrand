	<header>
	<link href="<?php echo base_url();?>assets/images/favicons/favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-57x57.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-60x60.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-72x72.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-76x76.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-114x114.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-120x120.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-144x144.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-152x152.png&v2=newfavicon">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets\images\favicons/apple-touch-icon-180x180.png&v2=newfavicon">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets\images\favicons/favicon-32x32.png&v2=newfavicon" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets\images\favicons/favicon-194x194.png&v2=newfavicon" sizes="194x194">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets\images\favicons/favicon-96x96.png&v2=newfavicon" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets\images\favicons/android-chrome-192x192.png&v2=newfavicon" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets\images\favicons/favicon-16x16.png&v2=newfavicon" sizes="16x16">
	<link rel="manifest" href="<?php echo base_url();?>assets\images\favicons/manifest.json&v2=newfavicon">
	<link rel="mask-icon" href="<?php echo base_url();?>assets\images\favicons/safari-pinned-tab.svg&v2=newfavicon" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets\images\favicons/favicon.ico&v2=newfavicon">
	<meta name="apple-mobile-web-app-title" content="eMomentum">
	<meta name="application-name" content="eMomentum">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url();?>assets\images\favicons/mstile-144x144.png&v2=newfavicon">
	<meta name="msapplication-config" content="<?php echo base_url();?>assets\images\favicons/browserconfig.xml&v2=newfavicon">
	<meta name="theme-color" content="#ffffff">
	<div class="row">
					<div class="col-md-3"><img class = "logo" src="<?php echo base_url();?>assets/images/emomentum-logo.png"/></div>					
		<nav class="navbar navigation" role="navigation" style = "margin-bottom:0px;">
			<div class="container">
				<div class="row">
				
    <!-- Brand and toggle get grouped for better mobile display -->
	
					<div class=" main-nav">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->

						<div class="nav-holder collapse navbar-collapse">
							<ul class="nav navbar-nav pull-right" style = "font-size:11px;">
								<li><?php echo anchor('Home','HOME')?></li>
								<li><?php echo anchor('Home/directors','ADMINISTRATION')?></li>
								<li><?php echo anchor('Home/projects_and_consultancy','OPERATIONS')?></li>
								<li><?php echo anchor('Home/sales','BUSINESS DEVELOPMENT')?></li>
								<li><?php echo anchor('gallery','GALLERY')?></li>
							   <li><a href="#" data-toggle="dropdown" class="dropdown-toggle">NEWS AND EVENTS<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?php echo anchor('home/newsandevents/1','Announcements')?></li>
										<li><?php echo anchor('home/newsandevents/4','Upcoming Events')?></li>
									</ul>
								</li>
								<li><?php echo anchor('home/newsandevents/2','INNOVATE')?></li>
								   <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src = "<?php echo base_url();?>assets/images/icon.png"/><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?php echo anchor('home/change_password/'.$this->session->userdata("username"),'Change Password')?></li>
										<li><?php echo anchor('home/sign_out','Log Out')?></li>
										<li><?php echo anchor('Admin','Admin Panel')?></li>
									</ul>
								</li>
							</ul>
						</div><!-- end of nav holder-->
					</div><!-- end of main nav-->
				</div> <!-- end of row-->
			</div> <!-- end of container-->
		</nav> <!---end navbar-->
		</div> <!-- end of row-->
		  <hr style = "margin-top:0px;height:1px;background-color:#3F66C5"/>	
	</header>