<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="sendemail.php" action="emailtest.php" method="post">
<table width="302" border="0" bgcolor="#FFFFFF">
  <tr>
    <td width="139" scope="col"><div align="center">To:</div></td>
    <th scope="col"><div align="center">
      <input type="text" name="txtTomail" />
    </div></th>
  </tr>
  <tr>
    <td><div align="center">Subject:</div></td>
    <td><div align="center">
      <input type="text" name="txtSubject" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">From:</div></td>
    <td><div align="center">
      <input type="text" name="txtFrommail" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Message:</div></td>
    <td><div align="center">
      <textarea name="txtMessage" c="c"></textarea>
    </div></td>
  </tr>
</table>
<p>
  <input name="submit" type="submit" value="Send email" />
</p>
<p><br/>
  <br/>
</p>
</form>
</body>
</html>
