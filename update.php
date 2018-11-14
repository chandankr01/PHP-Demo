<?php
 include('connect.php');
 $userid=$_POST['userid'];
 $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
   $emailid=$_POST['emailid'];
    $password=$_POST['password'];
	    $image=$_POST['img_ref'];
	$photo=$_FILES['photo']['name'];
	
	if($photo=="")
	{
		
		$photo=$image;
	}
	
	$image=move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$photo);
	
	
	
		$insert="update registration set firstname='$firstname',lastname='$lastname',emailid='$emailid',password='$password',photo='$photo' where userid='$userid'";
		   $status=mysql_query($insert);
		   
		   
		    if($status)
			  {
				  echo "<script>alert('SUCCESS ');
				   window.location='index.php'</script>";
			  }
			  else
			  {
				 "<script>alert('FAIL ');
				   window.location='index.php'</script>";
			  }
			  ?>
