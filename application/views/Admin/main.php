

<?php

require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

$options = [ 'gs_bucket_name' => 'emomentum_technical' ];
$upload_url = CloudStorageTools::createUploadUrl('/upload', $options);

  if(isset($_POST['do-upload']) AND $_POST['do-upload'] === "yes"){

  $yesupload = $_POST['do-upload'];
  $album_name = $_POST['album_name'];
  preg_match("//", "".$yesupload."");

  $filename = $_FILES['testupload']['name'];
  $filename = $album_name.'/'.$filename;

  $gs_name = $_FILES['testupload']['tmp_name'];
  move_uploaded_file($gs_name, 'gs://emomentum_technical/'.$filename.'');
?>

<div class="contentArea">
<?php
echo "<p class=\"Angel\">file is uploaded "." !</p>";
echo "<p class=\"Angel\">file name: ".$filename."</p>";
}
?>	
</div>

<form class="SomeSpaceDude" action="<?php echo $upload_url?>" enctype="multipart/form-data" method="post">
<p>Files to upload: </p> <br>
   <input type="hidden" name="do-upload" value="yes">
   
   <?php
   
$folder_names = file_get_contents('https://www.googleapis.com/storage/v1/b/emomentum_technical/o?delimiter=.&fields=items%2Fname&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ');
$folder_names = json_decode($folder_names);
$we = '/';
$folder_name = $folder_names->items;
$folder_number = count($folder_name);
?>
  <label>Please select an Folder to upload to:</label>
   <select id = "album_name" name = "album_name">
   <?php
   
   for($i=0;$i<$folder_number;$i++)
   {
	   ?>
	    <option><?php echo str_replace("/","",$folder_name[$i]->name);?></option>
		<?php
   }
   ?>   
    
   </select>
   <br><br>
<input class="Angel topcoat-button" type="file" name="testupload" >
<input class="Angel topcoat-button" type="submit" value="Upload">
</form>
</div>