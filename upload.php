<?php

    print_r($_FILES);
	echo "<br>";
	if($_FILES['upload_file']['size']>0 && $_FILES['upload_file']['error']==0)
	{
     $status = move_uploaded_file($_FILES['upload_file']['tmp_name'],"upload/"."testing_upload".$_FILES['upload_file']['name']);
	   echo $status;
	   if($status==1)
	   {
		   echo "File has been uploaded successfully";
	   }
	}
	else
	{
	   echo "File is not uploaded";	
	}
?>