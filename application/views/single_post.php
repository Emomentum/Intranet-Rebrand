<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>	
<?php
	    if($this->session->userdata('access_level')==FALSE){

	    $this->load->view('login');
				}
		else{
		?>
	<div class="body_holder">
	<!----------------Header------------->

	<header>
	<div class="row">
					<div class="col-md-3"><img class = "logo" src="images/emomentum-logo.png"/></div>					
		<nav class="navbar navigation" role="navigation">
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
		  <hr/>	
	</header>



	<div class="row">
		<div class="col-sm-4 col-md-2"></div>
    <div class="col-sm-4 col-md-8">
      <nav class="navbar navbar-default search-tab">
        <li>Tags</li>
        <li>Motivational</li>
      </nav>
      </div>
	
    <div class="col-sm-4 col-md-2"></div>
    
    
  
	 </div><!-- end of nav-->


<div class="row single-post-content">
  <div class="col-sm-4 col-md-2"></div>
  <div class="col-sm-4 col-md-8">
    <div class="thumbnail">
      <img src="images/athelete.jpg" alt="...">
      <div class="caption">
        <div class="row content-time-tag">
          <div class="col-sm-4 col-md-4 time-date"></div>
          <div class="col-sm-4 col-md-8">
            <h3>Try and be Authentic</h3>

          </div>
        </div>
      </div>
    </div>
  </div><!--first col end-->




  <div class="col-sm-4 col-md-2"></div>
</div>  <!--first row end-->	

<div class='row message'>

    <div class="col-sm-4 col-md-2"></div>
    <div class="col-sm-4 col-md-8"><p>What makes your business unique? Determining this could help you stand out from the crowd and give you advantages over your competitors.What makes your business unique? Determining this could help you stand out from the crowd and give you advantages over your competitors.What makes your business unique? Determining this could help you stand out from the crowd and give you advantages over your competitors.What makes your business unique? Determining this could help you stand out from the crowd and give you advantages over your competitors.What makes your business unique? Determining this could help you stand out from the crowd and give you advantages over your competitors.What makes your business unique? Determining this could help you stand out from the crowd and give you advantages over your competitors.</p></div>
    <div class="col-sm-4 col-md-2"></div>
   </div>


   <div class='row '>

    <div class="col-sm-4 col-md-2"></div>
    <div class="col-sm-4 col-md-6">
      <textarea class="form-control" rows="5">Add comment</textarea>
    </div>
    <div class="col-sm-4 col-md-4"></div>
   </div>
   <!--text area --> 
   <!--message  --> 
   <div class="row post">
  <div class="col-sm-4 col-md-2"></div>

  <div class="col-sm-4 col-md-8"><li><button type="button" class="btn btn-warning ">Post comment</button></li></div>
  <div class="col-sm-4 col-md-2"></div>
</div>

<hr/>
<?php
}
?>
</body></html>