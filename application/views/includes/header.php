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
							<ul class="nav navbar-nav pull-right">
								<li><?php echo anchor('home','Home')?></li>
								<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Administration<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?php echo anchor('Departments/directors','Directors')?></li>
										<li><?php echo anchor('Departments/finance','Finance')?></li>
										<li><?php echo anchor('Departments/hr','Human Resource')?></li>
										<li><?php echo anchor('Departments/risk','Risk and Compliance')?></li>
									</ul>
								</li>
								<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Operations<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?php echo anchor('Departments/projects_and_consultancy','Projects And Consultancy')?></li>
										<li><?php echo anchor('Departments/development','Development')?></li>
										<li><?php echo anchor('Departments/technical','Technical')?></li>
									</ul>
								</li>
								<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Business Development<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?php echo anchor('Departments/sales','Sales')?></li>
										<li><?php echo anchor('Departments/presales','Pre Sales')?></li>
										<li><?php echo anchor('Departments/marketing','Marketing')?></li>
										<li><?php echo anchor('Departments/products','Products and Partnership')?></li>
									</ul>
								<li><?php echo anchor('gallery','Gallery')?></li>
							   <li><a href="#" data-toggle="dropdown" class="dropdown-toggle">News and Events<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?php echo anchor('home/upcoming_events/1','Announcements')?></li>
										<li><?php echo anchor('home/upcoming_events/2','Communications')?></li>
										<li><?php echo anchor('home/upcoming_events/4','Upcoming Events')?></li>
									</ul>
								</li>
								<li><?php echo anchor('blog','Innovate')?></li>
							</ul>
						</div><!-- end of nav holder-->
					</div><!-- end of main nav-->
				</div> <!-- end of row-->
			</div> <!-- end of container-->
		</nav> <!---end navbar-->
		</div> <!-- end of row-->
		  <hr style = "margin-top:0px;height:1px;background-color:#3F66C5"/>	
	</header>