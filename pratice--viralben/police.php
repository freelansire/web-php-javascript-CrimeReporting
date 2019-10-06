<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="frmpolice" action="checkpolice" method="post">
<table align="center">
<tr>
          <td class="first">policename</td>
          <td><input name="txtname" id="txtname" type="text" size="30" style="background-color: #EEEEEE"  maxlength="15"/>
          <script type="text/javascript">
				var f1 = new LiveValidation('txtname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter the police name"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid police name"});
			</script></td>
        </tr>
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
		
		<tr class> 
			<td class="first">Address</td>
          <td><TEXTAREA ROWS="5" COLS="30" name="add" id="add" style="background-color: #EEEEEE" ></TEXTAREA> 
		  <script type="text/javascript">
				var f1 = new LiveValidation('add');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Address"});
		 </script></td>
			</tr>

    <tr>
          <td class="first">contact no</td>
          <td><input name="txtno" id="txtno" type="text" size="30" style="background-color: #EEEEEE" maxlength="12" />
         <script type="text/javascript">
				    var f1 = new LiveValidation('txtno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script></td> 
		</tr>
		
		<tr>
          <td class="first">Email id</td>
          <td><input name="txtemail" id="txtemail" type="text" size="30" style="background-color: #EEEEEE" maxlength="254" />
          <script type="text/javascript">
				    var f1 = new LiveValidation('txtemail');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> </td>
	   </tr>
	   <tr>
          <td>Contact Person</td>
          <td><input name="txtperson" id="txtperson" type="text" size="30" style="background-color: #EEEEEE"  maxlength="15"/>
          <script type="text/javascript">
				var f1 = new LiveValidation('txtperson');
				    f1.add(Validate.Presence,{failureMessage: " Please enter name of the contact person"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid ar"});
			</script></td>
        </tr>
		
		<tr>
          <td class="first">starting date</td>
          <td>DATE: <input type="text" name="sdate"  id="sdate" />
		  <script type="text/javascript">
				    var f1 = new LiveValidation('sdate');
				    f1.add(Validate.Presence,{failureMessage: " Please enter  hte date"});
	      </script> </td>
		</tr>
	</table>
	</form>	
	   
</body>
</html>
