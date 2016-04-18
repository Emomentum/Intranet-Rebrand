<!DOCTYPE html>
<html lang="en">

<head>
	<script type="text/javascript" src="<?php echo base_url(); ?>AdminAssets/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
    </script>

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
                        <h1 class="page-header">Edit Page</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
                       <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill In All fields
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								
								
                                  
<?php
foreach ($edit_page as $row) {			
			$image = $row->photo_url;
	        $title= $row->Topic;
            $id=$row->Blog_topicID;
			$date=$row->Timestamp;
			$cont=$row->details;
			$start=$row->Start_Date;
			$end=$row->End_Date;
}
?>
 <?php
        echo form_open_multipart('home/update_events/'.$id.'/'.$type.'');    
    ?>
 <div class="form-group">
  <label>Page Title</label>
 <input name="title" class="form-control" value="<?php echo $title; ?>" >
</div>
<div class="form-group" name="dates">
  <label>Start Date</label>
 <input id="start" name="start" class="form-control" value="<?php echo $start; ?>" >
</div>
 <div class="form-group" name="dates">
  <label>End Date</label>
 <input id="end" name="end" class="form-control" value="<?php echo $end; ?>"  >
</div>
 <div class="form-group">
  <label>Feature Image</label>
 <input name="userfile" class="form-control" type = "file" value="<?php echo $image; ?>" id = "userfile" >
</div>

<div class="form-group"> 
     
  <label>Page Content</label>
  <textarea id="content" name="content"class="form-control" rows="10"><?php echo $cont; ?></textarea> 
  </div>
  
 

 <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#basicModal">Update</a>
 <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#basicModal2">Cancel</a>
 
 
 <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
                <h3>You are about to Edit this Page?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button name="update" type="submit" class="btn btn-default">Update Now</button>
        </div>
    </div>
  </div>
</div>

<!--model to cancel-->
<div class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
                <h3>You are about to cancel edit?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <?php echo anchor('home/upcoming','Cancel Now',array('class'=>'btn btn-primary btn-sm'))?>
                
        </div>
    </div>
  </div>
</div>

<!-- /#modal -->
                                   <?php
        echo form_close();
    ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div> 
		
		
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('Admin/includes/scripts');?>

</body>

</html>
