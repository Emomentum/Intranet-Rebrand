<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jssor.slider.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
      <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:6000,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: false,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 358);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
           /* background: url('img/b05.png') no-repeat;*/
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
           /* */
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>

</head>
<body>	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php
	    if($this->session->userdata('email')== FALSE){

	    $this->load->view('login');
				}
		else{
		?>
		
	<div class="body_holder">
	<!-- Header -->

	<?php $this->load->view('includes/header');?>
	
<!-- service -->
 
	<div class="">
		<div class="container">
			<div class="row">
    			<div class="col-lg-8">
    			 	<div class="panel panel_announcement">
                        <div class="panel-heading pull-right heading-announcement">
                            Notice Board <span class = "direction-arrow">></span>
                        </div><!-- List group -->
						<!-- 	<ul class="list-group">
								<li class="list-group-item"></li> 
							</ul><!-- /.panel-body -->
							
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="6000" style = "padding:15px;position:absolute;bottom:0px">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								  </ol>								 
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
							   <?php
    								   $counter = 1;
										foreach ($announcement as $object ) {
											
											
											
											$type=1;
											$title1= $object->Topic;
											$title= substr($title1, 0, 35);
											$id=$object->Blog_topic_id;
											$details= $object->details;
											$topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');
											$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
										
										  
										  $string = strip_tags($details);

									if (strlen($string) > 100) {

										// truncate string
										$stringCut = substr($string, 0, 99);

										// make sure it ends in a word so assassinate doesn't become ass...
										$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
									} 		
									if($counter==1){
										?>
												<div class="item active">
									  <img src="http://placehold.it/1200x315" style = "opacity:0" alt="...">
									  <div class="carousel-caption" style = "text-align:left;left:0px;width:100%">
										  <h3 style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;"><?php echo $topic;?></h3>
										  <p><?php echo $string;?></p>
										  
									  </div>
									</div>
									<?php
									}
								else{     
										?>
										<div class="item">
									  <img src="http://placehold.it/1200x315" style = "opacity:0" alt="...">
									  <div class="carousel-caption" style = "text-align:left;left:0px;width:100%">
										  <h3 style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;"><?php echo $topic;?></h3>
										  <p><?php echo $string;?></p>
										  
									  </div>
									</div>
									
										<?php
								}
										$counter++;
										}
										?>
								  </div>
								
								</div> <!-- Carousel -->
							
							
							
							
                    </div><!-- /.panel -->
				</div>                
				<div class="col-lg-4">
					<div class="panel panel_communications">
                        <div class="panel-heading pull-right heading-communications">
                            Announcements<span class = "direction-arrow">></span>
                        </div>
                        <div class = "communications" style = "padding:15px;position:absolute;bottom:0px">
													 <?php
													 $counter = 0;
									
								foreach ($communications as $object ) {
									$counter++;
									$type=2;
									$title1= $object->Topic;
									$title= substr($title1, 0, 35);
									$id=$object->Blog_topic_id;
									$details= $object->details;
									$topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');		
									$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
								

							$string = strip_tags($details);

							if (strlen($string) > 100) {

								// truncate string
								$stringCut = substr($string, 0, 99);

								// make sure it ends in a word so assassinate doesn't become ass...
								$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
							}  	
								?>
								
								<p style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;"><?=$topic?></p>
								<p><?=$string?></p>
								<?php
								if($counter == 1){
									break;
								}
								}
								?>
						
					</div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
			</div>
			<div class="row">
    			<div class="col-lg-4">
    			 	<div class="panel panel_upcoming">
                        <div class="panel-heading pull-right heading-upcoming">
                            Upcoming Events
                        </div>
                        <div class = "communications" style = "padding:15px;position:absolute;bottom:0px">
                         <?php
		
		
		
	foreach ($upcoming as $object ) {
		$type=4;
		$title1= $object->Topic;
		$title= substr($title1, 0, 45);
		$details= $object->details;
		$id=$object->Blog_topic_id;
		$start= $object->Start_Date;
		$end=$object->End_Date;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');
		
	?>
								
								<p style = "font-weight: 600;font-size: 18px;text-decoration: none;color: #fff;"><?=$topic?></p>
								<p>Starts on: <?=$start?> and Ends On: <?=$end?></p>
								<?php 
	
	}
	?>
	</div>
                    </div><!-- /.panel -->
				</div>                
				<div class="col-lg-4">
                
					<div class="panel" style = "border:0px;">
                        <div class = "Processes">
                        <div class="panel-heading pull-center heading-processes">
                            Processes
                        </div>   
                        <div style = "font-weight: 600;" class = "processes-list"><a href="http://mailchimp.com/" target="_blank" style = "color:white;">MailChimp</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://emomentum.sugarondemand.com" target="_blank" style = "color:white;">Sugar CRM</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://www.projectmanager.com/" target="_blank" style = "color:white;">Projectmanager.com</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="http://uk.qbo.intuit.com/" target="_blank" style = "color:white;">Quickbooks</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://people.zoho.com/people/#home/feeds" target="_blank" style = "color:white;">Zoho People</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="https://emomentuminteractive.freshdesk.com/" target="_blank" style = "color:white;">Freshdesk</a></div>
                        <div style = "font-weight: 600;" class = "processes-list"><a href="http://emomentum-interactive.com/" target="_blank" style = "color:white;">Our Website</a></div>
                    </div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
								<div class="col-lg-4">
                
					<div class="panel" style = "border:0px;">
                        <div class = "innovate">
                        <div class="panel-heading pull-center heading-processes">
                            Innovate
                        </div>   
                        <div style = "font-weight: 600;" class = "innovate-list"><a href="http://mailchimp.com/" target="_blank" style = "color:black;">Placeholder</a></div>
                        <div style = "font-weight: 600;" class = "innovate-list"><a href="https://emomentum.sugarondemand.com" target="_blank" style = "color:black;">Placeholder</a></div>
                        <div style = "font-weight: 600;" class = "innovate-list"><a href="https://www.projectmanager.com/" target="_blank" style = "color:black;">Placeholder</a></div>
                        <div style = "font-weight: 600;" class = "innovate-list"><a href="http://uk.qbo.intuit.com/" target="_blank" style = "color:black;">Placeholder</a></div>
                        <div style = "font-weight: 600;" class = "innovate-list"><a href="https://people.zoho.com/people/#home/feeds" target="_blank" style = "color:black;">Placeholder</a></div>
                        <div style = "font-weight: 600;" class = "innovate-list"><a href="https://emomentuminteractive.freshdesk.com/" target="_blank" style = "color:black;">Placeholder</a></div>
                        <div style = "font-weight: 600;" class = "innovate-list"><a href="http://emomentum-interactive.com/" target="_blank" style = "color:black;">Placeholder</a></div>
                    </div>
                    </div><!-- /.panel -->
				</div><!-- /.panel -->
			</div>
			<div class="row">
    			
				<div class="col-lg-4">
                
					<div class="panel" style = "border:0px;">
						<div class="fb-page" data-href="https://www.facebook.com/eMomentumInteractive/" data-tabs="timeline" data-width="360" data-height="383" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/eMomentumInteractive/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/eMomentumInteractive/">Emomentum Interactive Systems ltd</a></blockquote></div>
                    </div><!-- /.panel -->
				</div><!-- /.panel --> 

				<div class="col-lg-4">
                
					<div class="panel" style = "border:0px;">
                        <a class="twitter-timeline" data-height="383" href="https://twitter.com/eMomentumKenya">Tweets by eMomentumKenya</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div><!-- /.panel -->
				</div><!-- /.panel --> 

				<div class="col-lg-4">
		<div class="panel panel_news" style="padding-right: 4px; background-color: transparent;">
                        <div class="panel-heading pull-center heading-news">
                            News Feeds
                        </div>

        <div id="jssor_1" style="position: relative; margin: 0 auto; top: -3px; left: -2px; width: 350px; height:385px;overflow: hidden; visibility: hidden;">
					    <div class="example" data-u="slides" style="cursor: default; position: relative; top: -3px; left: -2px; width: 350px; height: 385px; overflow: hidden;">
					            <div data-p="112.50" style="display: none;">
					                <div class="post_results" id="post_results1" rss_num="5" rss_url="http://www.nation.co.ke/latestrss.rss">
					            
					                </div>
					            </div>
					            <div data-p="112.50" style="display: none;">
					               <div class="post_results" id="post_results2" rss_num="5" rss_url="http://www.standardmedia.co.ke/rss/headlines.php">
					           
					                </div>
					            </div>        
        
        				</div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>

                    </div><!-- /.panel -->
				</div><!-- /.panel -->
								
			</div>
		</div>
  </div>
<?php $this->load->view('includes/footer');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<?php
}
?>
</body></html>