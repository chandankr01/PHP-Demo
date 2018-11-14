<?php
 include('connect.php');
$id=$_GET['userid'];
//echo $id;

$display="select photo from registration where userid='$id'";
$row=mysql_query($display);
$selimg=mysql_fetch_array($row);
$img=$selimg['photo'];
unlink('photo/'.$img);


$delete="delete from registration where userid='$id'";
$status=mysql_query($delete);


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