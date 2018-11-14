<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="feedback-main-div">

<div class="welcome-menu">
<div class="welcome"><h1>WELCOME</h1></div><!--end of welcome-->
<div class="menu">
<ul>
<li><a href="home.php" id="a">HOME</a></li>
<li><a href="addmobile.php" id="a">ADD MOBILE</a></li>
<li><a href="view-mobiles.php" id="a">VIEW MOBILE</a></li>
<li><a href="updateprofile.php" id="a">UPDATE PROFILE</a></li>
<li><a href="" id="a">FEEDBACK</a></li>
<li><a href="index.php" id="a">LOGOUT</a></li>
</ul><!--end of ul-->
</div><!--end of menu-->
</div><!--end of welcome-menu-->
<div class="add-mobile-main-div-inside">
<center><table border="1">

<tr>
<th>NAME</th>
<th>CONTACT</th>
<th >EMAIL ID</th>
<th>MESSAGE</th>
<th>DATE& TIME</th>

</tr>

<?php

include('connect.php');

$display="select * from enquiryform";
$row=mysql_query($display);
$count=mysql_num_rows($row);


while($record=mysql_fetch_array($row))
{
		$name=$record['name'];
	$contact=$record['contact'];
	$emailid=$record['emailid'];
	$message=$record['message'];
	$datetime=$record['datetime'];
	
	
				 
	
	echo "<tr>
	<td>$name</td>
	<td>$contact</td>
	<td>$emailid</td>
<td>$message</td>
<td>$datetime</td>
</tr>";
}



   
			 


?>
</table></center>
</div><!--end ofadd-mobile-main-div-inside-->
<div class="footer">
<br><h4> (c) Copyright 2016 STDIO BLUE BIRD</h4>
</div><!--end of footer-->
</div><!--end of feedback-main-div-->
</body>
</html>
