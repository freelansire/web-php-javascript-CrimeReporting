<?php
	include("sessionHandler.php");
	include("employeeHandler.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
function checkPhoto(value)
{
	var abc = value;
	var extension = abc.substring(abc.lastIndexOf('.')+1);
	extension = extension.toLowerCase();
	if ((extension != "jpg") && (extension != "jpeg") && (extension != "png") && (extension != "gif")) 	{
 		document.getElementById("photoMessage").innerHTML = "Please upload jpg/jpeg/png/gif image";
	}
	else
	{
		document.getElementById("photoMessage").innerHTML = "";
	}
}
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				req = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		if(document.formAddInnovator.country.value < 1)
		{
			document.getElementById("msgCountry").innerHTML = 'Please select country';
		}
		else
		{
			document.getElementById("msgCountry").innerHTML = '';
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
		}
	}
	function getCity(stateId) {	
	
	if(document.formAddInnovator.state.value > 0)
	{
		document.getElementById("msgState").innerHTML = '';
	}
	else	
	{
		document.getElementById("msgState").innerHTML = 'Please select state';
	}
		var strURL="findDistrict.php?state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
function clearDistrict()
{
	if(document.formAddInnovator.city.value > 0)
	{
		document.getElementById("msgDistrict").innerHTML = '';
	}
	else
	{
		document.getElementById("msgDistrict").innerHTML = 'Please select district';
	}

}
</script>
<?php
	//ob_start();
	//session_start();
	
	include("includes/_include.php");
	include("includes/_config.php");


	$conn = mysql_connect($dbHost, $dbUserName, $dbPassword) or die  ('Error connecting to mysql');
	mysql_select_db($database) or die("Can not select the database");
	
?>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Innovator</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link rel="stylesheet" type="text/css" href="css/tableFormat.css" media="all">
<script type="text/javascript" src="javascripts/validation.js"></script>
<script type="text/javascript" src="javascripts/checkAvailability.js"></script>
<script type="text/javascript" src="javascripts/disable.js">
</script><link type="text/css" rel="stylesheet" href="datePicker/datePicker.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="datePicker/datePickerMaster.js?random=20060118"></script>

</head>
<script type="text/javascript">
document.onkeypress = stopRKey;
function focusSet()
{
	document.formAddInnovator.txtUserName.focus();
	return true;
}
function clearMe()
{
	document.getElementById("message").innerHTML = '';
}
function validateForm()
{
	if(document.formAddInnovator.selClassification.value < 1)
	{
		document.getElementById("msgClassification").innerHTML = 'Please select classification';
		return false;
	}
	
	if(document.formAddInnovator.country.value < 1)
	{
		document.getElementById("msgCountry").innerHTML = 'Please select country';
		return false;
	}
	if(document.formAddInnovator.state.value < 1)
	{
		document.getElementById("msgState").innerHTML = 'Please select state';
		return false;
	}
	if(document.formAddInnovator.city.value < 1)
	{
		document.getElementById("msgDistrict").innerHTML = 'Please select district';
		return false;
	}
	if(document.getElementById("photoMessage").innerHTML)
	{
		return false;
	}
}
function clearClassification()
{
	if(document.formAddInnovator.selClassification.value > 0)
	{
		document.getElementById("msgClassification").innerHTML = '';
	}
	else
	{
		document.getElementById("msgClassification").innerHTML = 'Please select classification';
	}

}
</script>

<body id="main_body" onLoad=focusSet();>  
<form name = "formAddInnovator" class="appnitro" enctype="multipart/form-data" method="post" action="insertInnovator.php" onSubmit="return validateForm()">   
<img id="top" src="images/form/top.png" alt="">
<div id="form_container">
<table width="100%" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="8" height="79" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;Add Innovator</td>
</tr>
<tr>
	<td height="20" colspan="8" ></td>
</tr>
<tr>
	<td width="3%">&nbsp;</td>
	<td colspan="7"><strong>Login Details</strong></td>
</tr>
</tr>
	<td width="3%">&nbsp;</td>
	<td width="17%" class="formField">User Name </td>
	<td width="18%">
	<input type="text" name="txtUserName" id="txtUserName" onBlur="return checkAvailability('user','userName', this , 'User name')" onkeypress="clearMe()" maxlength="254"/>
		<script type="text/javascript">
			var f1 = new LiveValidation('txtUserName');
			f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
			f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
			f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid username"});
		</script>	</td>
	<td colspan="5"><font color="#FF0000"><div id="message"></div></font></td>
</tr>
<tr>
	<td height="5" colspan="8"></td>
</tr>
<tr>
	<td width="3%">&nbsp;</td>
	<td colspan="7"><strong>Personal Details</strong></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td class="formField">Old Ref. No </td>
  <td><input type="text" name="txtOldRefNo" id="txtOldRefNo" maxlength="15"/></td>
  <td colspan="5" class="formField">&nbsp;</td>
  </tr>
<tr>
	<td width="3%">&nbsp;</td>
	<td width="17%" class="formField">First Name </td>
	<td width="18%"><input type="text" name="txtFirstName" id="txtFirstName" maxlength="254"/>
		<script type="text/javascript">
			var f1 = new LiveValidation('txtFirstName');
			f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
			f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
			f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid firstname"});
		</script>	</td>
	<td width="13%" class="formField">Middle Name </td>
	<td width="18%">
		<input type="text" name="txtMiddleName" id="txtMiddleName" maxlength="254"/>
	  	<script type="text/javascript">
				var f1 = new LiveValidation('txtMiddleName');
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid middlename"});
		</script>	</td>
	<td width="12%" class="formField">Last Name </td>
	<td width="18%">
		<input type="text" name="txtLastName" id="txtLastName" maxlength="254"/>
			<script type="text/javascript">
				var f1 = new LiveValidation('txtLastName');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid surname"});
			</script>	</td>
	<td width="1%">&nbsp;</td>
</tr>
<tr>
	<td width="3%">&nbsp;</td>
	<td width="17%" class="formField">Gender</td> 
	<td width="18%">
		<input type="radio" name="sex" value="male" id="sex" checked >Male
		<input type="radio" name="sex" value="female" id="sex" >Female	</td>
	<td width="13%" class="formField"> Date of Birth</td>
	<td width="18%">
		<input name="button" type="button" id="submit1" onclick="displayCalendar(document.forms[0].txtDOB,'dd-mm-yyyy',this)" value="Pick" />
	  	<input name="txtDOB" size="11" id="txtDOB" type="text" readonly="readonly"/>	  </td >
	<td width="12%" class="formField">Classification</td>
	<td width="18%" colspan="2"><select name="selClassification" onchange="clearClassification()">
		<option value="-1">Select Classification</option>
		<?php
			$query = "select *from classification";
			$result = mysql_query($query, $conn) or die  ('Query Problem');	
				while ($row = mysql_fetch_array($result))
				{
    		?>
					<option value="<?=$row["classificationID"]?>"><?=$row["classificationName"]?></option>
			<?php
				}
	
			?>
		</select>
		<font color="#FF0000"><div id="msgClassification"></div></font>    </td>
</tr>
<tr>
	<td width="3%">&nbsp;</td>
	<td width="17%" class="formField">Local Address</td>
	<td colspan="6" ><input type="text" size="64%" name="txtAddress1" id="txtAddress1" maxlength="999"/>
	   <script type="text/javascript">
				var f1 = new LiveValidation('txtAddress1');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				</script>	  </td>
</tr>
<tr>
	<td width="3%">&nbsp;</td>
	<td width="17%" class="formField">Permanent Address</td>
	<td colspan="6" ><input type="text" size="64%" name="txtAddress2" maxlength="999"/></td>
</tr>
	  <tr >
	<td width="3%">&nbsp;</td>
	  <td width="17%" class="formField">City</td>
	  <td width="18%"><input type="text" name="txtCity" id="txtCity" maxlength="40"/>
	   <script type="text/javascript">
				var f1 = new LiveValidation('txtCity');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid city name"});
			</script>	  </td>
	  <td width="13%" class="formField">Pincode</td>
	  <td width="18%"><input type="text" name="txtPincode" id="txtPincode" maxlength="6" />
	   <script type="text/javascript">
				var f1 = new LiveValidation('txtPincode');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: "It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
			</script>	  </td>
		<td colspan="3">&nbsp;</td>
	</tr>
	<td width="3%">&nbsp;</td>
	  <td width="17%" class="formField">Village</td>
	  <td width="18%"><input type="text" name="txtVillage" id="txtVillage" maxlength="40"/>
	   <script type="text/javascript">
				var f1 = new LiveValidation('txtVillage');
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid village name"});
			</script></td>
	  <td width="13%" class="formField">Taluka</td>
	  <td width="18%"><input type="text" name="txtTaluka" id="txtTaluka" maxlength="40" />
	   <script type="text/javascript">
				var f1 = new LiveValidation('txtTaluka');
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid taluka name"});
			</script>	  </td>
		<td colspan="3">&nbsp;</td>
	</tr>
	 <tr >
	  <td width="3%">&nbsp;</td>
	  <td width="17%" class="formField">Country </td>
	  <td  width="18%"><select name="country" onChange="getState(this.value)">
			<option value="-1">Select Country</option>
			<?php
			$query = "select *from country";
			$result = mysql_query($query, $conn) or die  ('Query Problem');	
				while ($row = mysql_fetch_array($result))
				{
    		?>
					<option value="<?=$row["countryID"]?>"><?=$row["countryName"]?></option>
			<?php
				}
	
			?>
			
			</option>
		</select>  <font color="#FF0000"><div id="msgCountry"></div></font> 	 </td>
	  <td width="13%" class="formField">State </td>
	  <td width="18%">
	  		<div id="statediv">
	  		  <select name="state">
                <option value="-1">Select Country First</option>
              </select>
	  		</div>
		<font color="#FF0000"><div id="msgState"></div></font>		</td>
	  <td width="12%" class="formField">District</td>
	  <td width="18%" colspan="2">
<div id="citydiv"><select name="city" onchange="clearDistrict()" >
	<option value="-1">Select State First</option>
        </select></div>
		<font color="#FF0000"><div id="msgDistrict"></div></font>	  </td>
	</tr>
	
	
	<tr >
	<td width="3%">&nbsp;</td>
	  <td width="17%" class="formField">Phone (R) </td>
	  <td width="18%"><input type="text" name="txtPhoneR" id="txtPhoneR" maxlength="20"/>
	  <script type="text/javascript">
				var f1 = new LiveValidation('txtPhoneR');
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: "It allows only numbers"});
			</script>	  </td>
	  <td width="13%" class="formField">Phone (O) </td>
	  <td width="18%"><input type="text" name="txtPhoneO" id="txtPhoneO" maxlength="20"/>
	   <script type="text/javascript">
				var f1 = new LiveValidation('txtPhoneO');
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: "It allows only numbers"});
			</script>	  </td>
	  
	  <td width="12%" class="formField">Mobile No. </td>
	  <td width="18%" colspan="2"><input type="text" name="txtMobile" id="txtMobile" maxlength="10"/>
	   <script type="text/javascript">
				var f1 = new LiveValidation('txtMobile');
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: "It allows only numbers"});
				f1.add( Validate.Length, { minimum: 10, maximum: 10 } );
			</script>	  </td>
	</tr>
	<tr  >
	<td width="3%">&nbsp;</td>
	  <td width="17%" class="formField">Email Address 1</td>
	  <td width="18%"><input type="text" name="txtEmail1" id="txtEmail1" maxlength="254"/>
	  	   <script type="text/javascript">
		  	var email = new LiveValidation('txtEmail1');
			email.add( Validate.Email );
			</script>	  </td>
	   <td width="13%" class="formField">Email Address 2</td>
	   <td width="18%"><input type="text" name="txtEmail2" id="txtEmail2" maxlength="254"/>
	  <script type="text/javascript">
		  	var email = new LiveValidation('txtEmail2');
			email.add( Validate.Email );
			</script>	  </td>
		  <td width="12%" class="formField">Website</td>
	  <td width="18%" colspan="2"><input type="text" name="txtWebsite" id="txtWebsite" maxlength="254"/></td>
</tr>
<tr>
	<td width="3%">&nbsp;</td>
	   <td width="17%" class="formField">Upload Photo</td>
	   <td colspan="6">
	  <input type="file" name="image" maxlength="999"  onchange="checkPhoto(this.value)" readonly/><font color="#FF0000"><div id="photoMessage"></div></font></td>
	</tr>	
<tr>
	<td width="3%">&nbsp;</td>
	<td class="formField" width="17%" align="left" valign="top">Background Detail </td>
	<td colspan="6" ><textarea name="txtBgDetail" cols="48"></textarea></td>
</tr>

	<tr><td height="5" colspan="8"></td></tr>
	<tr ><td width="3%">&nbsp;</td>

	<td width="17%"></td>
	<td colspan="6"><input name="Submit" type="image" id="Submit" src="images/saveButton.png" value="Submit" /></td>
	</tr>
	<tr><td height="5" colspan="8"></td></tr>
	</table>
  </div>
	<img id="bottom" src="images/form/bottom.png"  >
</form>	
</body>
</html>
















</form>	
<img id="bottom" src="bottom.png" />
</body>
</html>


