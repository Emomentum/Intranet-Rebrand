<!DOCTYPE html>
<html>

<head>
	<title>Intranet Log-in</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<style type="text/css">
	    @import url(https://fonts.googleapis.com/css?family=Comfortaa:700);
	    @import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300);

		body{background-color: #F1F1F1;
		}
		*{box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;}
		#container {
		
			width: 350px;
			margin:0 auto;
			margin-top: 91px;

		}
		#img-logo {
			padding-bottom: 20px;
		}
		.form{
			background-color: #FFFFFF;
			border-top: solid;
			border-top-color: #425CA5;
			border-top-width: 5px;
			padding: 20px;
		}
		.form,.form *{}
		#spacers{
			height: 30px;
		}
		#sign_tab{
			
    		width: 100%;
    		padding: 0px 20px;
    		overflow: hidden;
		}
		#log_in{
			float: left;
		}
		#tri{
			background-image: url('<?php echo base_url();?>assets/images/tri.png');
			background-repeat: no-repeat;
			height:15px;
			margin-left: 15px;
		}
		#sign_bnt{
			font-family: 'Comfortaa', cursive;
			text-decoration: none;
			font-size: 22px;
			color: #425CA5;
			padding-top: 10px;
		}
		.btn{
			 background:none!important;
    		 border:none; 
    		 padding:0!important;
     		 font: inherit;
     		/*border is optional*/
    		 border-bottom:1px solid #425CA5; 
    		 cursor: pointer;
    		 color:#425CA5;
		}
		#nilisahau{
			font-family: 'Open Sans Condensed', sans-serif;
			text-decoration: none;
			float: right;
			font-size: 14px;
			color: #737373;
			padding-top: 30px;
		}
		.input_text_01{
			    width: 100%;
    			height: auto;
    			font-size: 18px;
    			outline: none;
    			border: 1px solid #AAAAAA;
    			position: relative;padding-left: 40px;
    			-webkit-box-shadow:0px 0px 9px 1px rgba(153,153,153,0.2);
    			box-shadow:0px 0px 9px 1px rgba(153,153,153,0.2);
		}

		.input_text_02{
			    width: 100%;
    			height: auto;
    			font-size: 18px;
    			outline: none;
    			border: 1px solid #AAAAAA;
    			position: relative;padding-left: 40px;
    			-webkit-box-shadow:0px 0px 9px 1px rgba(153,153,153,0.2);
    			box-shadow:0px 0px 9px 1px rgba(153,153,153,0.2);
		}

		.input_text_01:before{content: '';width: 40px;height:100%;position: absolute;left: 0;top: 0;background:#eee url('<?php echo base_url();?>assets/images/user.png') center center no-repeat; }
		.input_text_01:after{left:auto;right: 0}
		.input_text_01 input{border:none;padding: 15px 10px;display: block;outline: none;font-size: 110%;height: 40px;}
		.input_text_01 input:focus,.input_text_01 input:active{outline: none}

		.input_text_02:before{content: '';width: 40px;height:100%;position: absolute;left: 0;top: 0;background:#eee url('<?php echo base_url();?>assets/images/lock.png') center center no-repeat; }
		.input_text_02:after{left:auto;right: 0}
		.input_text_02 input{border:none;padding: 15px 10px;display: block;outline: none;font-size: 110%;height: 40px;}
		.input_text_02 input:focus,.input_text_02 input:active{outline: none}
    </style>
</head>
<body>
	<div id="container">
		<div id="img-logo">
		  <div align="center" id="img_logo"><img src="<?php echo base_url();?>assets/images/emomentumLogo.png" width="300" height="107" alt="display: block;" longdesc="<?php echo base_url();?>assets/images/emomentumLogo.png"></div>
		</div>
		
		<?php 
				echo form_open('home/checkpassword');
				
				?>
			<div class="form">
				<?php echo validation_errors();?>
			<div class="input_text_01">
				<?php
				$attributes = array('type'=>'text','id'=>'username','name'=>'username','value'=> $username,'disabled'=>'true');
				echo form_input($attributes);
				?>
			</div>
			<div id="spacers"></div>
			<div class="input_text_02">
				<?php
				$attributes = array('type'=>'password','id'=>'password','name'=>'password','placeholder'=>'New Password');
				echo form_input($attributes);
				?>			
			</div>
			<div id="spacers"></div>
						<div class="input_text_02">
				<?php
				$attributes = array('type'=>'password','id'=>'confirm','name'=>'confirm','placeholder'=>'Confirm Password');
				echo form_input($attributes);
				?>
			
			</div>
		</div>
		<div id="sign_tab">
			<div id="log_in">
				<div id="tri"></div>
				<div id="sign_bnt">
					<?php
				$attributes = array('value' =>'Submit','class'=>'btn btn-primary btn-large btn-block');
				echo form_submit($attributes);
				?>
				</div>
			</div>
			<div id="nilisahau"><?php echo anchor('Home','Back to home')?></div>
		</div>
		 <?php echo form_close();?>    
	</div>
</body>
</html>