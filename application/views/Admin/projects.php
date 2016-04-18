<!DOCTYPE html>
<html lang="en">

<head>
<?php //$this->load->view('includes/analyticTracking');?>
<?php $this->load->view('Admin/includes/header');?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/metabucket9.config.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/metabucket9.js"></script>
</head>
<body>
    <div id="wrapper">
<?php $this->load->view('Admin/includes/navigation');?>

      <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?=$department?></h1>
                    </div>
                     <div class="col-lg-2">
                    <a href="#newEmployee" class="btn btn-primary btn-block" data-toggle="modal">New Entry</a><br>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>Photo</th>
                                        	<th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Position</th>
                                            <th>Tel</th>
											<th>Action</th>
											
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                    	  <?php
                          foreach ($employee as $employee):
                          ?>   
                          <tr>
                         	<td><img src = "https://storage.googleapis.com/emomentum_profile_pics/<?php echo $employee->photo_url?>" width = "60"/></td>
                          	<td><?=$employee->First_Name?></td>
                          	<td><?=$employee->Last_Name?></td>
                          	<td><?=$employee->Email?></td>
                          	<td><?=$employee->Position?></td>
                          	<td><?=$employee->Phone_number?></td>
                          	<td><a href ="#d<?=$employee->Team_id;?>" data-toggle="modal" style = "color:red">Delete</a>&nbsp;&nbsp;&nbsp;<a href ="#e<?=$employee->Team_id;?>" data-toggle="modal"style = "color:green">Edit</a></td>
                          </tr>  
                          
                          <!--Delete A team member modal class -->
                                            
					<?php echo form_open("admin/deleteteammember");?>
						<div class="modal fade" id="d<?=$employee->Team_id?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  						  <div class="modal-dialog">
      						  <div class="modal-content">
          						  <div class="modal-header">
          							  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          						 	 <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
           						 </div>
			            		<div class="modal-body">
			            			<input type = "text" value ="<?php echo $employee->Team_id?>" name = "teamid" id = "teamid" hidden />
			            			<input type = "text" value ="<?php echo $this->uri->uri_string();?>" name = "departmentpage" id = "departmentpage" hidden />
			                		<h4>Do you want to delete User <?=$employee->First_Name?> <?=$employee->Last_Name?>?</h4>
			           			 </div>
			           			 <div class="modal-footer">
			            			<button type="submit" class="btn btn-primary">OK</button>
			               		    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			       				 </div>		
    						</div>
					  </div>
					</div>

						<!-- /end of delete modal -->
				</form>

					<!-- Edit team member modal class-->
					
					<?php echo form_open_multipart('admin/editteammember');?>
						<div class="modal fade" id="e<?=$employee->Team_id?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  						  <div class="modal-dialog">
      						  <div class="modal-content">
          						  <div class="modal-header">
          							  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          						  		<h4 class="modal-title" id="myModalLabel">Edit Team details</h4>
          						  </div>
						            <div class="modal-body">
						                <input type = "text" value ="<?php echo $employee->Team_id?>" name = "teamid" id = "teamid" hidden />
						            	<input type = "text" value ="<?php echo $this->uri->uri_string();?>" name = "departmentpage" id = "departmentpage" hidden />
						            	<img src = "https://storage.googleapis.com/emomentum_profile_pics/<?php echo $employee->photo_url?>" width = "60"/><label>Photo : </label><input type = "file" class = "form-control" name = "userfile" id = "userfile"/><br>
						                <label>First Name : </label><input type = "text" class = "form-control" name = 'firstname' id = "firstname" value = "<?=$employee->First_Name?>"/><br>
						                <label>Last Name : </label><input type = "text" class = "form-control" name = "lastname" id = "lastname" value = "<?=$employee->Last_Name?>"/><br>
						                <label>Position : </label><input type = "text" class = "form-control" name = "position" id = "position" value = "<?=$employee->Position?>"/><br>
						                <label>Email : </label><input type = "email" class = "form-control" name = "email" id = "email" value = "<?=$employee->Email?>"/>
						                <label>Phone Number : </label><input type = "number" class = "form-control" name = "number" id ="number" value = "<?=$employee->Phone_number?>"/>
						            </div>
						            <div class="modal-footer">
						            	<button type="submit" class="btn btn-primary">Save</button>
						                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						            </div>
    							</div>
  							</div>
						</div>


<!-- end of edit class/#modal -->
						</form>
                          <?php
                          endforeach;
                          ?>
						 
										</tbody>
                                </table> 
                    </div>
                   
                </div>
			
            <div class="container-fluid">
                <div class="row">
                     	<div class="container">
      
<div align="left"    width="auto" style="margin-top: 20px;margin-right:20px">
            		   <span><h4 style="color:#255CCA" >Public Folder</h4></span>
    			</div> 
      
    <div align="left" width="auto" style="margin-top: 20px;margin-right:20px"> 
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
          <h4 class="modal-title">Upload document</h4>
        </div>
        <div class="modal-body">
		 <div class="row">
		
		

      <iframe src="http://27.sharp-effort-99409.appspot.com" style="zoom:0.60" frameborder="0" height="250" width="99.6%"></iframe>


</div>
        
   
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 
        </div>
		</form>
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
		
		
		 <iframe src="http://38.sharp-effort-99409.appspot.com" style="zoom:0.60" frameborder="0" height="250" width="99.6%"></iframe>
         
         
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
	  </div>
	  </div>
	    <div class="container-fluid">
	   <div class="row">
                     	<div class="container">
      
	  <div class="col-lg-8  service" id="service1">
		<div>
    			
    			<div style ="padding: 36px 31px 31px 31px;;text-align: justify;">
    <div id="jstree-gcs-demo" class="well" style = "border: 0px;min-height: 0px;padding: 0px;margin: 0px;border-radius: 0px;"></div>
   
	    <div class="row">
	  <div id = "album_list"></div>
    </div>
   
		</div>
		</div>
		</div>
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

