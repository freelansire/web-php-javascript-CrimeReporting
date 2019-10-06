<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet">
</head>

<body>

<?
$select=$_GET['salCSSstyle'];

if($select=='css1')
{
  echo "<h1 class='mycss1'>Hello</h1>";
}
else if($select=='css2')
{
  echo "<h1 class='mycss2'>Hello</h1>";
}
else
{
  echo "<h1 class='mycss3'>Hello</h1>";
}
?>

</body>
</html>
