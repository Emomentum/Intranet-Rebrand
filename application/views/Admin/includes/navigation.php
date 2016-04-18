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
			
					$useremail =  $this->session->userdata('email');
						   if ($useremail == 'eugene.aiko@emomentum-interactive.com'){
							  $this->load->view('Admin/includes/hr_nav');
						    }
							elseif ($useremail == 'nicola.mutungi@emomentum-interactive.com' || $useremail == 'benson.murage@emomentum-interactive.com'){
							$this->load->view('Admin/includes/marketing_nav');
						    }
							elseif ($useremail == 'sylvin.wangui@emomentum-interactive.com'){ 
							$this->load->view('Admin/includes/finance_nav');
						    }
							elseif ($useremail ==  'nadya.issa@emomentum-interactive.com') { 
							$this->load->view('Admin/includes/directors_nav');

							}
					        elseif ($useremail ==  'andrew.mbuthia@emomentum-interactive.com' || $useremail ==  'glynis.mwangi@emomentum-interactive.com'){ 
							$this->load->view('Admin/includes/technical_nav');
							}
							elseif ($useremail ==  'jane.wawira@emomentum-interactive.com'){ 
							$this->load->view('Admin/includes/projects_nav');
							}
							elseif ($useremail ==  'kevin.kabuye@emomentum-interactive.com' || $useremail == 'victor.ngugi@emomentum-interactive.com' ){ 
							$this->load->view('Admin/includes/sales_nav');
							}
							elseif ($useremail ==  'george.kangethe@emomentum-interactive.com'){ 
							$this->load->view('Admin/includes/presales_nav');
							}
							elseif ($useremail ==  'joan.muriuki@emomentum-interactive.com '){ 
								$this->load->view('Admin/includes/products_nav');
							}
							elseif ($useremail == 'nyambura.ndungu@emomentum-interactive.com'){ 
								$this->load->view('Admin/includes/risk_nav');

							}
							elseif($useremail ==  'test@emomentum-interactive.com' || $useremail == 'grace.mureithi@emomentum-interactive.com' || $useremail == 'kingsley.amaitsa@emomentum-interactive.com' || $useremail == 'david.odhiambo@emomentum-interactive.com' || $useremail == 'bryan.murithi@emomentum-interactive.com'){
								 
								 $this->load->view('Admin/includes/admin_nav');	   
				
						    }
							  
						?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>