"# File-Upload-in-PHP" 


File Upload in PHP with HTML FORM For Beginners Tutorial
=======================================================
<form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="upload_file">
      <input type="submit" value="Submit">
</form> 

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


Youtube Tutorial : https://youtu.be/RDnBPxPz1X8

Donate to Paypal : patabuz@gmail.com

https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KHM59LRPNV3YY&source=url
