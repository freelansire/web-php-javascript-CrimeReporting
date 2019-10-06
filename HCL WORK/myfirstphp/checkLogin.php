<? include("confing.php");
$username=$_GET['txtuserName'];
$password1=$_GET['txtPassword'];

$selectQuery="select * from loginmaster where username='".$username."' and password='".$password1."' ";


$resultset=mysql_query($selectQuery);


$c =mysql_num_rows($resultset);

if($c==1)
{

  header("location:home.php?user=$username");
 }
else
{
  header("location:login.php?msg=Sorry!...Invalid User");
 }
?>