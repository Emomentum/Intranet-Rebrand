        <!-- Navigation 'nyambura.ndungu@emomentum-interactive.com'-->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Emomentum Intranet Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                       <?php
			
					$useremail =  $_SERVER['USER_EMAIL'];
						   if ($useremail == 'eugene.aiko@emomentum-interactive.com'){
							   ?>
							   	 <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              
                                <li>
                                   <?php echo anchor('home/announcement','Announcement')?> 
                                </li>
								<li>
                                    <?php echo anchor('home/communications','communications')?>
                                </li>
								<li>
                                  <?php echo anchor('home/upcoming','Upcomimg Events')?>
                                </li>
								
                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						 <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								 <li>
                                     <?php echo anchor('Admin/hr','Human Resource')?>
                                </li>
							</ul>
						</li>
						<?php
						   }
						   elseif ($useremail == 'nicola.mutungi@emomentum-interactive.com'){
					   ?>
					    <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                     <?php echo anchor('Admin/Marketing','Marketing')?>
                                </li>
							</ul>
						</li>
					<?php
						   }
			           elseif ($useremail == 'sylvin.wangui@emomentum-interactive.com'){ 
					   ?>
                            <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                      <?php echo anchor('Admin/Finance','Finance')?>
                                </li>
							</ul>
						</li> 
<?php
					   }
					   if ($useremail ==  'nadya.issa@emomentum-interactive.com') { 
?>						
				<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                      <?php echo anchor('Admin/Directors','Directors')?>
                                </li>
							</ul>
						</li> 
						<?php
					   }
					    elseif ($useremail ==  'grace.mureithi@emomentum-interactive.com'){ 
?>	
                               <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                      <?php echo anchor('Admin/development','Development')?>
                                </li>
							</ul>
						</li> 
                         <?php
					   }
					   elseif ($useremail ==  'andrew.mbuthia@emomentum-interactive.com'){ 
?>	
                                 <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                       <?php echo anchor('Admin/Technical','Technical')?>
                                </li>
							</ul>
						</li> 
						<?php
						}
						 elseif ($useremail ==  'jane.wawira@emomentum-interactive.com'){ 
?>	
                                 <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                       <?php echo anchor('Admin/projectsandconsultancy','Projects and Consultancy')?>
                                </li>
							</ul>
						</li> 
						<?php
						}
						elseif ($useremail ==  'kevin.kabuye@emomentum-interactive.com'){ 
?>	
                                 <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                       <?php echo anchor('Admin/Sales','Sales')?>
                                </li>
							</ul>
						</li> 
						<?php
						}
						 elseif ($useremail ==  'george.kangethe@emomentum-interactive.com'){ 
?>	
                                 <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                       <?php echo anchor('Admin/Presales','Presales')?>
                                </li>
							</ul>
						</li> 
						<?php
						}
						 elseif ($useremail ==  'joan.muriuki@emomentum-interactive.com'){ 
?>	
                                 <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                       <?php echo anchor('Admin/Productandpartnership','Products and Partnership')?>
                                </li>
							</ul>
						</li> 
						<?php
						}
						 elseif ($useremail == 'david.odhiambo@emomentum-interactive.com'){ 
?>	
                                 <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                       <?php echo anchor('Admin/Riskandcompliance','Risk and Compliance')?>
                                </li>
							</ul>
						</li> 
						<?php
						 }
					    elseif($useremail ==  'test@emomentum-interactive.com' || 'grace.mureithi@emomentum-interactive.com' || 'bryan.murithi@emomentum-interactive.com'){
								   
							   
						 ?>
						    	 <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              
                                <li>
                                   <?php echo anchor('home/announcement','Announcement')?> 
                                </li>
								<li>
                                    <?php echo anchor('home/communications','communications')?>
                                </li>
								<li>
                                  <?php echo anchor('home/upcoming','Upcomimg Events')?>
                                </li>
								
                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						         <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <?php echo anchor('Admin/Marketing','Marketing')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/hr','Human Resource')?>
                                </li>
                                <li>
                                    <?php echo anchor('Admin/Finance','Finance')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/Directors','Directors')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/development','Development')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/Technical','Technical')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/projectsandconsultancy','Projects and Consultancy')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/Sales','Sales')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/Presales','Presales')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/Productandpartnership','Products and Partnership')?>
                                </li>
                                <li>
                                     <?php echo anchor('Admin/Riskandcompliance','Risk and Compliance')?>
                                </li>

                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<?php
							   }
							   else{
								   ?>
								           <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								  <li>
                                      
                                </li>
							</ul>
						</li> 
								   
								   <?php
								 
							   }
						?>
                            

                                
                          
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <?php echo anchor('Admin/gallery','<i class="fa fa-camera-retro fa-fw"></i>Gallery');?></a>
                        </li>
                       
                        <li>
                           <?=anchor('admin/blog','<i class="fa fa-comments-o fa-fw"></i>Blog');?>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>