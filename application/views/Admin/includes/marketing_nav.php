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
							</ul>
						</li>
						 <li>
                            <?php echo anchor('Admin/gallery','<i class="fa fa-camera-retro fa-fw"></i>Gallery');?></a>
                        </li>
                       
                        <li>
                           <?=anchor('admin/blog','<i class="fa fa-comments-o fa-fw"></i>Innovate');?>
                        </li>