<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
$selectQuery = "select *from mstr_area ";
$resultSet = mysql_query($selectQuery) or die(mysql_error());
//echo $selectQuery;
?>
<style type="text/css">
<!--
@import url("css/template.css");
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 14px}
.style7 {
	font-size: 12;
	font-weight: bold;
}
-->
</style>


 
      <h2 class="componentheading">View Area Details </h2>
      <a href="area.php" class="clear1 style7"> Add area</a> | 
	  <?php base64_decode($_GET['msg'])?></strong>
	  <table width="76%" border="0" bgcolor="#FFFFFF">
	<tr>
		<td colspan="6" height="79" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/><span class="highlight"> View Area </span></td>
	</tr>
	<tr>
		<td height="5" colspan="6"></td>
	</tr>
	<tr >
	  <td width="5%">&nbsp;</td>
      <td width="9%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="52%" class="style4 tableHeading style2">&nbsp;Area Name</td>      
      <td width="17%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="17%" align="center" class="style4 tableHeading style2">Delete</td>
    </tr>
	<tr>
	<td colspan="6" height="5"></td>
</tr>
<tr>
	<td colspan="6" class="rowLine2"></td>
</tr>
<tr>
	<td colspan="6" height="3"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysql_fetch_array($resultSet))
	{
	?>
    <tr >
      <td >&nbsp;</td>
      <td align="center" ><?php echo $i++; ?></td>
      <td align="center" ><?php echo $record["area_name"];?></a></td>      
      <td align="center" ><a href="editarea.php?cityname=<?php echo $record["area_name"];?>">
	  <img title="Edit Area" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletearea.php?cityname=<?php echo $record["area_name"];?>">
	  <img title="Delete Area Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    <tr  >
      <td colspan="8" >&nbsp;</td>
    </tr>
  </table>
   </p>
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <?php include("footer.php");?>
</p>
