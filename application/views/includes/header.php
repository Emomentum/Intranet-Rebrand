	<header>
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
										<li><?php echo anchor('home/newsandevents/2','Communications')?></li>
										<li><?php echo anchor('home/newsandevents/4','Upcoming Events')?></li>
									</ul>
								</li>
								<li><?php echo anchor('Innovate','INNOVATE')?></li>
								   <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src = "<?php echo base_url();?>assets/images/icon.png"/><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?php echo anchor('home/change_password','Change Password')?></li>
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