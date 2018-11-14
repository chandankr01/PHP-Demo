<?php
 include('connect.php');
 $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
   $emailid=$_POST['emailid'];
    $password=$_POST['password'];
	$photo=$_FILES['photo']['name'];
	
	$image=move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$photo);
	
		$insert="insert into registration(firstname,lastname,emailid,password,photo,datetime)value('$firstname','$lastname','$emailid','$password','$photo',now())";
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
