<? include("header.php");
include("config.php");

$selectQuery = "select *from mstr_officer where username = '".$username."' ";


$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewemp.php");

?>
<body>
<h1>officer Information</h1>
<form name="frmofficer" action="updateofficer.php" method="post">
<table>
 <tr>
          <th colspan="3" class="first"><strong>officer informaion</strong></th>
        </tr>		


             <tr>
               <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
			     <span class="style3">First Name: </span>
               <td colspan="3" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                <input type="text" value="<? echo $record["first_name"]; ?>" name="fname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
				   failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid Firstname"});
				 </script>
                 </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Middle Name: </span>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                <input type="text" value="<? echo $record["middle_name"]; ?>" name="mname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid Middlename"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr>
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Last Name:</span>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" value="<? echo $record["last_name"]; ?>" name="lname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:"Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="28" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Gender:</span>
               <td colspan="3" align="left" bgcolor="#FFFFFF">
                 <span class="style15 style3">
                 <label>                   
                   <input type="radio" name="gender" value="Male">Male</label>        
                 <label>
                   <input type="radio" name="gender" value="Female">Female</label>
                 </span></td>
             </tr>
             <tr>
               <td height="60" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Address:</span>
               <td width="207" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <TEXTAREA ROWS="5" COLS="30" name="address" id="address" style="background-color: #EEEEEE" ><? echo $record["address"]; ?></TEXTAREA>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script> 
                 </label>
               </span></td>
               <td width="74" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">City:</span></td>
               <td width="296" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="city" size="1"  id="city" >
				 		<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['city_id']?>">
							<?php echo $rowCity['city_name']?></option>
                  		<?php }?>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				 </script> 
                 </select>
				 </span></td>
             </tr>
             
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Pin-code:</span></td>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                
                 <input type="text" value="<? echo $record["pincode"]; ?>" name="pincode" />						 
				 <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>                 
               </span></td>
             </tr>
			 
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Contact number: </span>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" value="<? echo $record["contact_no"]; ?>" name="contactno" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('contactno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Email-id:</span>
             
               <td colspan="3" align="left" bgcolor="#FFFFFF">
			   <input type="text" value="<? echo $record["emailid"]; ?>" name="emailid" />
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Joining Date:</span>
               <td colspan="3" align="left" bgcolor="#FFFFFF">
			   <input type="text" value="<? echo $record["Jdate"]; ?>" name="jdate" />
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Last Date:</span>             
               <td colspan="3" align="left" bgcolor="#FFFFFF">
			   <input type="text" value="<? echo $record["Ldate"]; ?>" name="ldate" />
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Police station name:</span>             
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
               <select name="psname" size="1"  id="psname" >
                 <?php
						  $psQuery = "select *from mstr_policestation";
						  $rsPs = mysql_query($psQuery);
						  while($rowPs = mysql_fetch_array($rsPs))
						  {
						  ?>
                 <option value="<?php echo $rowPs['policestation_id']?>"> 
				 <?php echo $rowPs['policestation_name']?></option>
                 <?php }?>
                 <script type="text/javascript">
				    var f1 = new LiveValidation('psname');
				    f1.add(Validate.Presence,{failureMessage: "Please enter police station name"});				   
				 </script>
               </select>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Designation Name:</span>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                  <select name="designation" size="1"  id="designation" >
                   <?php
						  $desigQuery = "select *from mstr_designation";
						  $rsDesig = mysql_query($desigQuery);
						  while($rowDesig = mysql_fetch_array($rsDesig))
						  {
						  ?>
                   <option value="<?php echo $rowDesig['desi_id']?>"> 
				   <?php echo $rowDesig['desi_name']?></option>
                   <?php }?>
                   <script type="text/javascript">
				    var f1 = new LiveValidation('designation');
				    f1.add(Validate.Presence,{failureMessage: "Please enter designation name"});				   
				 </script>
                 </select>
               </span></td>
             </tr>
           <tr><td><input type="submit" value="Update"  /></td>
        </tr>
	</table>
	</form>	
	   
</body>
</html>
