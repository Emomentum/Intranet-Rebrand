<!DOCTYPE html>
<html lang="en">

<head>
<?php //$this->load->view('includes/analyticTracking');?>
<?php $this->load->view('Admin/includes/header');?>
	<script type="text/javascript" src="<?php echo base_url(); ?>AdminAssets/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
    </script>
</head>
<body>
    <div id="wrapper">
<?php $this->load->view('Admin/includes/navigation');?>

        <div id="page-wrapper">
		<?php
			
			$useremail =  $this->session->userdata('email');
						  
			if ($useremail == 'nicola.mutungi@emomentum-interactive.com' || $useremail == 'benson.murage@emomentum-interactive.com' || 'test@emomentum-interactive.com' || $useremail == 'grace.mureithi@emomentum-interactive.com' || $useremail == 'kingsley.amaitsa@emomentum-interactive.com' || $useremail == 'david.odhiambo@emomentum-interactive.com' || $useremail == 'bryan.murithi@emomentum-interactive.com'){
					?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Emomentum Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row"> 
            	<div class="col-lg-12">
            	<?php echo $this->session->flashdata('success_update');?>
            	<?php echo $this->session->flashdata('fail_new_blog');?>
            	<?php echo $this->session->flashdata('success_delete');?>
            	<?php echo $this->session->flashdata('fail_deletion');?>
            	</div>
            	             <div class="col-lg-4">
            	             	<a href="#newBlog" class="btn btn-primary btn-block" data-toggle="modal">New Post</a><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-comment fa-fw"></i>Blog Topics
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                            	<?php foreach ($blogTopics as $topic):?>
                                <div class="list-group-item" style = "padding-bottom:24px;">
                                    <p><?=$topic->Topic;?></p> 
                                </div>
                                <? endforeach ?>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="panel panel-default">
                    	
                        <div class="panel-heading">
                            Topic Description
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                    <?php foreach($blogTopicDescription as $description):?>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                        	<div>
                                            <h4 class="timeline-title"style = "float:left;"><?=$description->Topic ;?></h4>
                                            <div class = "pull-right">
                                            	<a href="#editBlog" class="text-muted small" data-toggle="modal" style = "color: #05AA52;font-weight: 600;"><em>Edit</em></a><br>
                                            	<a href="#deleteBlogpost" class="text-muted small" data-toggle="modal" style = "color: #F70039;font-weight: 600;"><em>Delete</em></a>
                                            </div>
                                            </div>  
                                        </div>
                                        <div class="timeline-body" style = "text-align:justify;padding-top:59px;">
                                           <?=$description->details;?>
                                        </div>
                                    </div>
                                  
										<!-- Edit Blog Modal HTML -->
										<div id="editBlog" class="modal fade">
										    <div class="modal-dialog">
										        <div class="modal-content form-group" >
										        	<?php echo form_open('Admin/UpdateBlog') ?>
										            <div class="modal-header">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										                <input class = "form-control" name = "topic" id= "topic" type = "Text" value = "<?=$description->Topic ;?>" required />
										                <input type = "Text" name = "topicId" id = "topicId"value = "<?=$description->Blog_topic_id;?>" hidden/>
										            </div>
										            <div class="modal-body">
										                <textarea name = "blogDescription" id = "blogDescription" style = "text-align:justify;" rows = "10" required class = "form-control"><?=$description->details;?></textarea>
										               
										            </div>
										            <div class="modal-footer">
										                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										                <input type="submit" class="btn btn-primary" value = "Save changes"/>
										            </div>
										           </form>
										        </div>
										    </div>
										</div>
										                       <!--delete post modal-->
                        <div id="deleteBlogpost" class="modal fade">
										    <div class="modal-dialog">
										        <div class="modal-content form-group" >
										        	<?php echo form_open('Admin/DeleteBlog') ?>
										            <div class="modal-header">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										           		<input type = "Text" name = "topicId" id = "topicId"value = "<?=$description->Blog_topic_id;?>" hidden/>
										            </div>
										            <div class="modal-body">
										               <p>You are about to delete Blog post <?=$description->Topic?>.Proceed?</p>
										               
										            </div>
										            <div class="modal-footer">
										                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										                <input type="submit" class="btn btn-primary" value = "Yes"/>
										            </div>
										           </form>
										        </div>
										    </div>
										</div>
                        <!-- end of delete post modal -->
                                    <?php endforeach; ?> 
                                           <!--new post modal-->
                        <div id="newBlog" class="modal fade">
										    <div class="modal-dialog">
										        <div class="modal-content form-group" >
										        	<?php echo form_open('Admin/newBlog') ?>
										            <div class="modal-header">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										                <input class = "form-control" name = "new_topic" id= "new_topic" type = "Text" required Placeholder = "Post Topic" /> 
										            </div>
										            <div class="modal-body">
										                <textarea Placeholder = "Post Description" name = "new_Description" id = "new_Description" style = "text-align:justify;" rows = "10" class = "form-control"></textarea>
								
										            </div>
										            <div class="modal-footer">
										                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										                <input type="submit" class="btn btn-primary" value = "Save changes"/>
										            </div>
										           </form>
										        </div>
										    </div>
										</div>
                        <!-- end of new post modal -->
           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
   
            </div>
            <!-- /.row -->
		<?php
			}
			else{
				?>
				<div class="row"> 
					<div class="col-lg-12">
					<p>You do not have permissions to access this page</p>
					</div>
				</div>
		<?php
			}
		?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('Admin/includes/scripts');?>

</body>

</html>
