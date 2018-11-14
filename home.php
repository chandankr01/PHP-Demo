
<?php
session_start();
 include('connect.php');
 
$userid=$_SESSION['userid'];
$firstname=$_SESSION['firstname'];
$emailid =$_SESSION['emailid'];
	$photo =$_SESSION['photo'];
	
	echo $userid;
   
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="home-main">
<div class="header"></div><!--end of header-->
<div class="welcome-menu">
<div class="welcome"><h1>WELCOME</h1></div><!--end of welcome-->
<div class="menu">
<ul>
<li><a href="" id="a">HOME</a></li>
<li><a href="addmobile.php" id="a">ADD MOBILE</a></li>
<li><a href="view-mobiles.php" id="a">VIEW MOBILE</a></li>
<li><a href="updateprofile.php" id="a">UPDATE PROFILE</a></li>
<li><a href="feedback.php" id="a">FEEDBACK</a></li>
<li><a href="logout.php" id="a">LOGOUT</a></li>
</div><!--end of menu-->
</div><!--end of welcome-menu-->
<div class="home-center">
<div class="home-center1">
<div class="home-center11">
<img src="css/add-mobile1.png" height="100" width="225">
</div><!--end of home-center11-->
<div class="home-center12">
<center><h2>ADD MOBILE</h2><br></center>
<p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>

</div><!--end of home-center12-->
<div class="home-center33"><a href="add mobile.php">SEE MORE</a></div><!--end of home-center13-->
</div><!--end of home-center1-->
<div class="home-center2">
<div class="home-center21"> <img src="css/view mobile.png" height="100" width="225">
</div><!--end of home-center21-->
<div class="home-center22">
<center><h2>VIEW MOBILE</h2><br></center>
<p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>

</div><!--end of home-center22-->

<div class="home-center33"><a href="view-mobiles.php">SEE MORE</a></div><!--end of home-center23-->

</div><!--end of home-center2-->
<div class="home-center3">
<div class="home-center31">
<img src="photo/<?php echo $photo; ?>" width='225' height='100'>
</div><!--end of home-center31-->

<div class="home-center32">
<center><b>USERNAME-:</b><?php echo $firstname; ?></center><br><br>
<p><b>EMAIL ID-:</b><?php echo $emailid; ?></p>

</div><!--end of home-center32-->

<div class="home-center33"><a href="updateprofile.php">UPDATE PROFILE</a></div><!--end of home-center33-->


</div><!--end of home-center3-->
</div><!--end of home-center-->
<div class="footer">
<br><h4> (c) Copyright 2016 STDIO BLUE BIRD</h4>
</div><!--end of footer-->
</div><!--end of home-main-->


</body><!--end of body-->
</html><!--end of html-->
