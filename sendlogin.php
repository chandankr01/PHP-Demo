
<?php
session_start();
 include('connect.php');
 $username=$_POST['username'];
    $password=$_POST['password'];

	
	
	
	$select="select * from registration where emailid='$username' and password='$password'";//for check valid username and password
	
	//echo $select;
		   $status=mysql_query($select);
		   $count=mysql_num_rows($status);//check the no of row 
		//   echo $count;
		   
		   
		   if($count=="")
			  {
				  echo"<script>alert('Invalid Username /password');
				   window.location='index.php'</script>";
			  }
			  else
			  {
				  
				  
				 $record=mysql_fetch_array($status);

	$userid=$record['userid'];
	$firstname=$record['firstname'];
	$emailid=$record['emailid'];
	$photo=$record['photo'];
	
	//echo $userid;
	
	$_SESSION['userid']=$userid;
	 $_SESSION['firstname']=$firstname;
	  $_SESSION['emailid']=$emailid;
	  $_SESSION['photo']=$photo;
   
				  
				  
				 
				  echo"<script>alert('Login Success');
				   window.location='home.php'</script>";
			  }
			  ?>
