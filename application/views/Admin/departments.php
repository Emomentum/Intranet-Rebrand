<!DOCTYPE html>
<html lang="en">

<head>
<?php //$this->load->view('includes/analyticTracking');?>
<?php $this->load->view('Admin/includes/header');?>
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
                          	<td><img src = "http://localhost:20080/assets/images/profile.png" width = "60" style = "border-radius:67px;"/></td>
                          	<td><?=$employee->First_Name?></td>
                          	<td><?=$employee->Last_Name?></td>
                          	<td><?=$employee->Email?></td>
                          	<td><?=$employee->Position?></td>
                          	<td><?=$employee->Phone_number?></td>
                          	<td><a href ="#d<?=$employee->Team_id;?>" data-toggle="modal">Delete</a><a href ="#e<?=$employee->Team_id;?>" data-toggle="modal">Edit</a></td>
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
					
					<?php echo form_open('admin/editteammember');?>
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
						            	<img src = "" width = "60"/><label>Photo : </label><input type = "file" class = "form-control"/><br>
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

