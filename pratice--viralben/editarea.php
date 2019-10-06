<?php 
include("header.php");
include("config.php");
$areaname = $_GET['areaname'];
$selectQuery = "select *from mstr_area where area_name = '".$areaname."' ";


$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
	//header("location:viewpolice.php");
?>

<style type="text/css">
<!--
@import url("css/template.css");
-->
</style>
<body>
<h1><span class="componentheading">Edit area </span></h1>
<form name="editarea.php" action="updatearea.php" method="post">
<table width="67%" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="6" height="79" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/> <span class="highlight">Edit Area Name </span></td>
	<td width="1%"></span><td width="1%"></td>
</tr>
<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Old Area Name</span>:</td>
	<td width="23%" ><input type="text" id="area" name="area" value="<?php echo $record["area_name"]; ?>"/>		
		
			<script type="text/javascript">
				var f1 = new LiveValidation('area');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid area name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField">New area Name: </td>
	<td width="23%" >
	<input type="text" id="newdarea" name="newdarea" />
	<script type="text/javascript">
				var f1 = new LiveValidation('newdarea');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid new area name"});

			</script>	</td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
	<input name="update" type="submit" class="header-button"  id="update" value="Update"/></td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
</table>
</form>	
	   
</body>
</html>