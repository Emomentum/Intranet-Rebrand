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
                        <h1 class="page-header">ALL Pages</h1>
                        
						<?php 
    //show message from add / edit page
    if(isset($_GET['action'])){ 
        echo '<h3>Page '.$_GET['action'].'.</h3>'; 
    } 
    ?>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Image</th>
                                            <th>Page Title</th>
                                            <th>Last Modified</th>
											<th>Page To Edit</th>
											<th>Page To Delete</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                        <?php
    	
	foreach ($upcoming as $row ) {
		
			$image= $row->photo_url;
			$title= $row->Topic;
            $id=$row->Blog_topicID;
            $title= anchor('home/viewpage/'.$id.'/'.$type.'',$title);
			$date=$row->Timestamp;
            $edit=anchor('home/edit_page/'.$id.'/'.$type.'','Edit');
			$delete1= '<a href="#" data-toggle="modal" data-target="#basicModal">DELETE</a>';
			$delete=anchor('home/delete_page/'.$id.'/'.$type.'','DELETE Now',array('class'=>'btn btn-primary btn-sm'));
			echo '
            <tr class="odd gradeX">
                                            <td><img alt = "No image available" width = "50px" height = "50px" src = "https://storage.googleapis.com/emomentum_announcements/'.$image.'"/></td>
											<td>'.$title.'</td>
											<td>'.$date.'</td>
											<td>'.$edit.'</td>
											<td>'.$delete1.'</td>
											
                                        </tr>';
			}  ?>
						 
										</tbody>
                                </table> 
                    </div>
                </div>
                <?php 
               
                echo anchor('home/create_events/'.$type.'','Create New Event',array('class'=>'btn btn-primary btn-sm'))?> 
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div> 
		<form method="post">
		
		<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
                <h3>Do you want to delete this Page?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <?php echo $delete; ?>
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

