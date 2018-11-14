<?php
 include('connect.php');

 $mobilename=$_POST['mobilename'];
  $mobileprice=$_POST['mobileprice'];
   $photo=$_FILES['photo']['name'];
    $description=$_POST['description'];
	
	
	
	$image=move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$photo);
	
		$insert="insert into mobile(mobilename,mobileprice,photo,description,datetime)value('$mobilename','$mobileprice','$photo','$description',now())";
		 
		 
		
 $status=mysql_query($insert);
		   
		   
		    if($status)
			  {
				  echo "<script>alert('SUCCESS ');
				   window.location='view-mobiles.php'</script>";
			  }
			  else
			  {
				  echo "<script>alert('fail');
				   window.location='view-mobiles.php'</script>";
			  }
			  ?>


