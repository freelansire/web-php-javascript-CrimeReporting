<?php
include("adminHandler.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add Category</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link rel="stylesheet" type="text/css" href="css/tableFormat.css" media="all">
<script type="text/javascript" src="javascripts/validation.js"></script>
<script type="text/javascript" src="javascripts/checkAvailability.js"></script>
<script type="text/javascript" src="javascripts/disable.js"></script>
<script type="text/javascript">
document.onkeypress = stopRKey;
function focusSet()
{
	document.formAddCategory.txtCategoryName.focus();
	return true;
}
function clearMe()
{
	document.getElementById("message").innerHTML = '';
}
function validateForm()
{
	if(document.getElementById("message").innerHTML)
	{
		return false;
	}
}
</script>
</head>
<body onLoad=focusSet();>  
<form name = "formAddCategory" class="appnitro"  method="post" action="insertCategory.php" onSubmit="return validateForm()">       
<img id="top" src="images/form/top.png" alt="">
<div id="form_container">
<table width="100%" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="4" class="rowBorder" height="74" align="left" >&nbsp;&nbsp;&nbsp;&nbsp;Add Category</td>
</tr>
<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="3%">&nbsp;</td>
	<td width="17%" class="formField">Category Name</td>
	<td width="17%"><input type="text" id="txtCategoryName" name="txtCategoryName" onBlur="return checkAvailability('category','categoryName', this , 'Category name')" onkeypress="clearMe()" maxlength="60"/>	
	
		<script type="text/javascript">
			var f1 = new LiveValidation('txtCategoryName');
			f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
			f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
			f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid category"});
		</script>  
	</td>
	<td width="63%">
	<font color="#FF0000">	
	<div id="message"></div></font>
	</td>
</tr>
<tr>
		<td height="5" colspan="4"></td>
	</tr>
	<tr>
		<td width="3%">&nbsp;</td>
	  	<td width="17%"></td>
		<td colspan="2" width="80%"><input name="submit" type="image" id="Save" src="images/saveButton.png" value="Save" /></td>
	</tr>
	<tr><td height="5" colspan="4"></td></tr>
</table>
</div>
	<img id="bottom" src="images/form/bottom.png"  >
</form>	
</body>
</html>