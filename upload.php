<?php

// if there was a previous file remove it
$oldfile = $_POST['oldimage'];
if ($oldfile) { unlink("images/".$oldfile); }

$imgfile = $_FILES["image"]["name"];
//echo $imgfile;
$folder = "images/";

$time = time()."-"; 
$file_renamed = $time.basename($imgfile);

move_uploaded_file( $_FILES["image"]["tmp_name"], $folder.$time.$imgfile );
//file must be echo'ed out to appear as a call back for the ajax success function


echo '<img src="images/'.$time.$imgfile.' " />';
echo "<div id='img-name' >".$file_renamed."</div>";


?>