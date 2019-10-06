<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="checkcity" name="frmcity" method="post">   
 <table align="center">
<tr>
          <td class="first">Areaname</td>
          <td><input name="txtarea" id="txtarea" type="text" size="30" style="background-color: #EEEEEE"  maxlength="15"/>
          <script type="text/javascript">
				var f1 = new LiveValidation('txtarea');
				    f1.add(Validate.Presence,{failureMessage: " Please enter the areaname"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid areaname"});
			</script></td>
        </tr>
		
		  <tr>
          <td class="first">Pincode1</td>
          <td><input name="pin1" id="pin1" type="text" size="30" style="background-color: #EEEEEE"  maxlength="6"/>
				<script type="text/javascript">
				    var f1 = new LiveValidation('pin1');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script> 
			</script></td> 
		</tr>
		
		<tr>
          <td class="first">cityname</td>
          <td><input name="txtcity" id="txtcity" type="text" size="30" style="background-color: #EEEEEE"  maxlength="15"/>
          <script type="text/javascript">
				var f1 = new LiveValidation('txtcity');
				    f1.add(Validate.Presence,{failureMessage: " Please enter the cityname"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid cityname"});
			</script></td>
        </tr>
		
		 <td class="first">Pincode2</td>
          <td><input name="pin2" id="pin2" type="text" size="30" style="background-color: #EEEEEE"  maxlength="6"/>
				<script type="text/javascript">
				    var f1 = new LiveValidation('pin2');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script> 
			</script></td> 
		</tr>
		</table>
		</form>
		
</body>
</html>
