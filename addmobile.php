<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="add-mobile-main-div">

<div class="welcome-menu">
<div class="welcome"><h1>WELCOME</h1></div><!--end of welcome-->
<div class="menu">
<ul>
<li><a href="home.php" id="a">HOME</a></li>
<li><a href="" id="a">ADD MOBILE</a></li>
<li><a href="view-mobiles.php" id="a">VIEW MOBILE</a></li>
<li><a href="" id="a">UPDATE PROFILE</a></li>
<li><a href="feedback.php" id="a">FEEDBACK</a></li>
<li><a href="index.php" id="a">LOGOUT</a></li>
</ul><!--end of ul-->
</div><!--end of menu-->
</div><!--end of welcome-menu-->
<div class="add-mobile-main-div-inside">
<form method="post" action="sendmobile.php" enctype="multipart/form-data">
<table  id="tt">

<tr class="head">
<h5>ADD MOBILE</h5>
<tr>
<td id="tt1">MOBILE NAME</td> <td><input type="text" placeholder="NAME" required id="input1" name="mobilename"></td>
</tr>



<tr>
<td id="tt1">MOBILE PRICE</td> <td><input type="text" placeholder="PRICE" required id="input1" name="mobileprice"></td>
</tr>



<tr>
<td id="tt1">MOBILE PHOTO</td> <td><input type="file" placeholder="MOBILE" required id="input1" name="photo"></td>
</tr>


<tr>
<td id="tt1">MOBILE DESCRIPTION</td>
<td><textarea cols="60" rows="10" name="description" placeholder="DESCRIPTION"  id="input1" ></textarea></td>
</tr><script>
            CKEDITOR.replace( 'description' );
        </script>

</table><!--end of table-->
<center><input type="submit" id="submit"></center>

</form><!--end of form-->
</div><!--end of add-mobile-main-div-inside-->
<div class="footer">
<br><h4> (c) Copyright 2016 STDIO BLUE BIRD</h4>
</div><!--end of footer-->
</div><!--end of add-mobile-main-div-->
</body>
</html>
