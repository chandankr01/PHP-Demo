<?php
session_start();
 include('connect.php');
 
$userid=$_SESSION['userid'];
$firstname=$_SESSION['firstname'];
$emailid =$_SESSION['emailid'];
	$photo =$_SESSION['photo'];
	
	
	
	
	
$display="select * from registration where userid='$userid'";
$row=mysql_query($display);
$record=mysql_fetch_array($row);
	$userid=$record['userid'];
	$firstname=$record['firstname'];
	$lastname=$record['lastname'];
	$emailid=$record['emailid'];
	$password=$record['password'];
	$photo=$record['photo'];
	$datetime=$record['datetime'];
   
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="registration-main-div">
<div class="registration-main-div-inside">
<div class="reg-main-div1"><h3>CREATE ACCOUNT</h3></div><!--end of reg-main-div1-->
<div class="reg-main-div2">
<label id="label1">User Id</label>
<label id="label1">First Name</label>
<label id="label1">Last Name</label>
<label id="label1">Email</label>
<label id="label1">Password</label>
<label id="label1">Upload Photo</label>
</div><!--end of reg-main-div2-->
<form method="post" action="update.php" enctype="multipart/form-data">
<div class="reg-main-div3">
<br><input type="text" id="input1"  placeholder="First Name"name="userid" value="<?php echo $userid ?>"><br><br>
<br><input type="text" id="input1"  placeholder="First Name"name="firstname" value="<?php echo $firstname ?>"><br><br>
<br><input type="text" id="input1"  placeholder="Last Name"name="lastname" value="<?php echo $lastname ?>"><br><br>
<br><input type="email" id="input1" placeholder="Email"name="emailid" value="<?php echo $emailid ?> "><br><br>
<br><input type="password" id="input1"  placeholder="Password"name="password" value="<?php echo $password ?> "><br><br>
<br><input type="file" id="input1" name="photo">
<img src="photo/<?php echo $photo ?>" width='50' height='50'>
<br><input type="hidden" id="input1" placeholder="Email"name="img_ref" value="<?php echo $photo ?>">

<input type="submit"id="log-in-button"><!--end of button-->
</div><!--end of reg-main-div3-->
</form>

</div><!--end of registration-main-div-inside-->
</div><!--end of registration-main-div-->
</body>
</html>
<?php /*?>///what is sesition and php 
types of super golbal php
 what is primary key and forign key
  different b\w javascript and php
  use of php<?php */?>