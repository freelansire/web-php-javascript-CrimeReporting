<? include("haheader.php")?>;
<body>
<form name="form1" method="GET" action="checkLogin.php">
<table width="377" border="0" >
  <tr>
    <th colspan="2" scope="col">Log in to the system </th>
  </tr>
  <tr>
    <td width="165" height="29">Username:</td>
  
  <td>
  <input type="text" name="txtuserName" ></td></tr>
  <tr>
  <td width="165" height="29">Password:</td>
		  <td>
		  <input type="password" name="txtPassword" ></td>
         </tr>
		 
 </table>
<input type="submit" value="Login" >
<input type="reset" value="Reset">
</form>
</body>
</html>
