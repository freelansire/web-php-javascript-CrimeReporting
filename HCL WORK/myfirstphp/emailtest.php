<?

$tomail=$_POST['txtTomail'];
$subject=$_POST['txtSubject'];
$frommail=$_POST['txtFrommail'];
$msg=$_POST['txtMessage'];

if(mail("$tomail","$subject","$msg","FROM:$frommail"))
{
  echo "Sending performed successfully!!!";
 }
else
{
  echo "Congratulation!!!!!      Sending fail!!!";

}

?>