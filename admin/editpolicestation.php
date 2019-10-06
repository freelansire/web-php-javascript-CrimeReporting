<? include("header.php");
include("config.php");

$selectQuery = "select *from mstr_poilcestation where poilcestation_id = '".$policestation_id."' ";


$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewpolice.php");

?>
<body>
<h1>police Information</h1>
<form name="frmofficer" action="updatepolicestation.php" method="post">
<table>
 <tr>
          <th colspan="3" class="first"><strong>opolicestation informaion</strong></th>
        </tr>		

<tr>
                    <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Police Station Name: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input type="text" value="<? echo $record["policestation_name"]; ?>" name="pname" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('psname');
						f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid Firstname"});
					 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Area Name: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="area" size="1"  id="area" >
                        <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysql_query($areaQuery);
						  while($rowArea = mysql_fetch_array($rsArea))
						  {
						  ?>
                        <option value="<?php echo $rowArea['area_id']?>"> 
						<?php echo $rowArea['area_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('area');
				          f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="60" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000"> Address:</span> </td>
                    <td width="207" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <TEXTAREA ROWS="5" COLS="30" name="address" id="address" style="background-color: #EEEEEE"><? echo $record["address"]; ?></TEXTAREA>
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
                     <input type="text" value="<? echo $record["pincode"]; ?>" name="pincode" maxlength="6" />	 <script type="text/javascript">
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
					<span class="style19" style="color: #000000">Email-id</span>: </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                       <input type="text" value="<? echo $record["Email_id"]; ?>" name="emailid"  maxlength="254"/>
			            <script type="text/javascript">
				           var f1 = new LiveValidation('emailid');
				           f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				           f1.add( Validate.Email );
				        </script>                       
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000"> 
					<span class="style19" style="color: #000000">Contact number: </span></span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">
					 <input type="text" value="<? echo $record["contact_no"]; ?>" name="contactno" maxlength="12" />
					<script type="text/javascript">
				       var f1 = new LiveValidation('contactno');
					   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
					   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
					   failureMessage: " It allows only numbers"});
					   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
					 </script>
					</td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Contact Person:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">
					 <input type="text" value="<? echo $record["contact_person"]; ?>" name="contactperson" />
					<script type="text/javascript">
				    var f1 = new LiveValidation('contactperson');
				    f1.add(Validate.Presence,{failureMessage: " Please enter contact person name"});
				  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
				   //failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid contact person names"});
				 </script>
					</td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">
					<span class="style19" style="color: #000000">Starting Date:</span></span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">
					 <input type="text" value="<? echo $record["starting_date"]; ?>" name="sdate" /></td>
    </tr>
	 <tr><td><input type="submit" value="Update"  /></td>
        </tr>
	</table>
	</form>	
	   
</body>
</html>