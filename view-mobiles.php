<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="view-mobiles-main-div">

<div class="welcome-menu">
<div class="welcome"><h1>WELCOME</h1></div><!--end of welcome-->
<div class="menu">
<ul>
<li><a href="home.php" id="a">HOME</a></li>
<li><a href="addmobile.php" id="a">ADD MOBILE</a></li>
<li><a href="" id="a">VIEW MOBILE</a></li>
<li><a href="updateprofile.php" id="a">UPDATE PROFILE</a></li>
<li><a href="feedback.php" id="a">FEEDBACK</a></li>
<li><a href="index.php" id="a">LOGOUT</a></li>
</ul><!--end of ul-->
</div><!--end of menu-->
</div><!--end of welcome-menu-->

<center><table border="1">

<tr>
<th>MOBILE ID</th>
<th>MOBILE NAME</th>
<th>MOBILE PRICE</th>
<th>MOBILE PHOTO</th>
<th>DESCRIPTION</th>
<th>DATETIME</th>
</tr>

<?php

include('connect.php');

$display="select * from mobile";
$row=mysql_query($display);
$count=mysql_num_rows($row);


while($record=mysql_fetch_array($row))
{
		$mobileid=$record['mobileid'];
	$mobilename=$record['mobilename'];
	$mobileprice=$record['mobileprice'];
	$photo=$record['photo'];
	$description=$record['description'];
	$datetime=$record['datetime'];
	
	
				 
	
	echo "<tr>
	<td>$mobileid</td>
	<td>$mobilename</td>
	<td>$mobileprice</td>
<td><img src='photo/$photo' width='100' height='50' alt=' '/></td>
<td>$description</td>
<td>$datetime</td>
</tr>";
}			
?>
</table></center>




<div class="footer">
<br><h4> (c) Copyright 2016 STDIO BLUE BIRD</h4>
</div><!--end of footer-->

</div><!--end of view-mobiles-main-div-->
</body><!--end of body-->
</html><!--end of html-->


