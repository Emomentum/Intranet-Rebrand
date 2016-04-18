<!DOCTYPE html>
<html lang="en">

<head>
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
                        <h1 class="page-header">Read Page</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
                       <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<?php
								
								foreach ($upcoming as $row ) {
		
			$title= $row->Topic;
            $id=$row->Blog_topicID;
            //$title= anchor('home/viewpage?id='.$id.'',''.$title.'');
			$date=$row->Timestamp;
			$cont=$row->details;
			$start=$row->Start_Date;
			$end=$row->End_Date;
			
            $edit=anchor('home/edit_page/'.$id.'/'.$type.'','Edit',array('class'=>'btn btn-primary btn-sm'));
			$delete=anchor('home/delete_page/'.$id.'/'.$type.'','Delete', array('class'=>'btn btn-primary btn-sm'));
								
								
								
								
echo '<div>';
    echo '<h1>'.$title.'</h1>';
    echo '<p>Last Edited on '.date('jS M Y', strtotime($date)).'</p>';
	echo '<p><b>Start Date:</b>'.$start.'<b> End Date:</b>'.$end.'</p>';    
    echo '<p>'.$cont.'</p>';                
echo '</div>';
echo $edit;
echo '     ';
echo $delete;
}
?>

<!--model to cancel-->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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


