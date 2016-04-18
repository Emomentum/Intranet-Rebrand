<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('Admin/includes/header');?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>AdminAssets/js/metabucket2.config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>AdminAssets/js/metabucket2.js"></script>
<?php $this->load->view('Admin/includes/scripts');?>
<?php //$this->load->view('includes/analyticTracking');?>
</head>
<body>
    <div id="wrapper">
<?php $this->load->view('Admin/includes/navigation');?>

      <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                        <div align="center" width="auto" style="margin-top: 20px;margin-right:20px"> 
	  <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Upload</button>
		<button type="button" class="btn btn-primary"data-toggle="modal" data-target="#myModal2">New Folder</button>
		<button type="button" class="btn btn-primary"data-toggle="modal" data-target="#myModal3">Delete</button>
		<button type="button" class="btn btn-primary">Move</button>
		
		  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Photo</h4>
        </div>
        <div class="modal-body">
	
		 <iframe src="http://3.sharp-effort-99409.appspot.com" style="zoom:0.60" frameborder="0" height="250" width="99.6%"></iframe>
         
</div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
        
		</div>
      </div>
	  </div>
	  </div>
	  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
	    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Folder</h4>
        </div>
        <div class="modal-body">
		
		
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
	  </div>
	  </div>
	  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
	    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Folder or File</h4>
        </div>
        <div class="modal-body">
		
		
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
  
    </div>
	<div class="col-lg-8  service" id="service1">
		<div>
    			<div>
            		   <span><u><h4>Albums</h4></u></span>
    			</div> 
    			<div style ="padding: 36px 31px 31px 31px;;text-align: justify;">
    <div id="jstree-gcs-demo" class="well" style = "border: 0px;min-height: 0px;padding: 0px;margin: 0px;border-radius: 0px;"></div>
   
	    <div class="row">
	  <div id = "album_list"></div>
    </div>
   
					<!--<iframe style = "max-width:1045px;width:100%;background-color: #fff;" src = "https://drive.google.com/embeddedfolderview?id=0B4G2H5OFvlsmfjVJSVdPUjh6Y0ZiR29MMlE4UWk0RXFfYkdKaGZndUYtd2hkYUlBYzRCdk0#grid" width = "800" height = "281" frameborder = "0">
                    </iframe>
                      <a href = "https://drive.google.com/a/emomentum-interactive.com/folderview?hl=en&id=0B4G2H5OFvlsmfjVJSVdPUjh6Y0ZiR29MMlE4UWk0RXFfYkdKaGZndUYtd2hkYUlBYzRCdk0#grid" target ="_blank" style = "padding-bottom:8px;float:left"><img src = "https://cdn.rawgit.com/Emomentum/Jambojet/master/images/drive folder.png" width = "22"/>Open in drive</a> 
                -->

    			</div>                     
                          <!-- List group -->
  				
                        <!-- /.panel-body -->
       </div>
	
	
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div> 
        
        		<?php echo form_open_multipart('admin/newteammember');?>
		
		<div class="modal fade" id="newEmployee" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="myModalLabel">New Team Member</h4>
            </div>
            <div class="modal-body">
            	<input type = "text" value ="<?php echo $departmentId?>" name = "departmentid" id = "departmentid" hidden />
            	<input type = "text" value ="<?php echo $this->uri->uri_string();?>" name = "departmentpage" id = "departmentpage" hidden />
            	<img src = "" width = "60"/><label>Photo : </label><input type = "file" size = "20" name = "userfile" id= "userfile" class = "form-control"/><br>
                <label>First Name : </label><input type = "text" class = "form-control" name = 'firstname' id = "firstname"/><br>
                <label>Last Name : </label><input type = "text" class = "form-control" name = "lastname" id = "lastname"/><br>
                <label>Position : </label><input type = "text" class = "form-control" name = "position" id = "position"/><br>
                <label>Email : </label><input type = "email" class = "form-control" name = "email" id = "email"/>
                <label>Phone Number : </label><input type = "number" class = "form-control" name = "number" id ="number"/>
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn btn-primary">Save</button> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
        </div>
    </div>
  </div>
</div>

<!-- /#modal -->
</form>
		
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php $this->load->view('Admin/includes/scripts');?>

</body>

</html>

