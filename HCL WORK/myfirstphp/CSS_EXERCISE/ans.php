<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$value1=$_GET['txtValue1'];
$value2=$_GET['txtValue2'];
$operator=$_GET['salOptr'];

if($operator=='add')
{
	echo "Addition is". $value1+$value2;
}
else if($operator=='sub')
{
	echo "Subtraction is". $value1-$value2;
}
else if($operator=='div')
{
	echo "Division is". $value1/$value2;
}
else
{
	echo "Multiplication is". $value1*$value2;
}

?>
</body>
</html>
