<?php
include("config.php");
$areaname = $_POST['area'];

$insertQuery = "insert into mstr_area (area_name) values ('".$areaname."')";

$msg = base64_encode("Inserted Successfully");
	
	if(mysql_query($insertQuery)) 
      {	  
		header("location:viewarea.php?msg=$msg");	  
	   }
	else
	 {
		header("location:area.php?msg=Not Inserted");
	  }
   
?>
