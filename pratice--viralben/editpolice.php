<? include("header.php");
include("config.php");
$policeid = $_GET['police_id'];
$selectQuery = "select *from mstr_police where policeid = '".$police_id."' ";


$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewemp.php");

?>
<body>
<h1>Police Information</h1>
<form name="frmpolice" action="updatepolice" method="post">
<table>
 <tr>
          <th colspan="3" class="first"><strong>Police informaion</strong></th>
        </tr>		

<tr>
          <td class="first">policename</td>
          <td> <input type="text" value="<? echo $record["policename"]; ?>" name="txtpolicename" />
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
          <td><input type="text" value="<? echo $record["areaname"]; ?>" name="txtarea" />
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
          <td><TEXTAREA ROWS="5" COLS="30" name="add" id="add" style="background-color: #EEEEEE" ><? echo $record["address"]; ?></TEXTAREA> 
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
          <td><input type="text" value="<? echo $record["contact_no"]; ?>" name="txtno"  maxlength="12"/></td>
        <td> <script type="text/javascript">
				    var f1 = new LiveValidation('txtno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script></td> 
		</tr>
		
		<tr>
          <td class="first">Email id</td>
          <td><input type="text" value="<? echo $record["Email_id"]; ?>" name="txtemail" maxlength="254" />
          <script type="text/javascript">
				    var f1 = new LiveValidation('txtemail');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> </td>
	   </tr>
	   <tr>
          <td>Contact Person</td>
          <td><input type="text" value="<? echo $record["contact_person"]; ?>" name="txtemail" maxlength="15" />
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
          <td> <input type="text" value="<? echo $record["starting_date"]; ?>" name="txtsdate" />
		  <script type="text/javascript">
				    var f1 = new LiveValidation('sdate');
				    f1.add(Validate.Presence,{failureMessage: " Please enter starting date"});
	      </script> </td>
		</tr>
		
		<tr><td><input type="submit" value="Update"  /></td>
        </tr>
	</table>
	</form>	
	   
</body>
</html>
