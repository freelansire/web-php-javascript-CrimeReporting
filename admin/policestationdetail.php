<?php include("header.php"); ?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {		
		$('#sdate').datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2010'
		});
		$('#txtjoin').datepicker({
			changeMonth: true,
			changeYear: true,
		});		
	});	
	</script>

<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
.style15 {font-size: 18px}
.style19 {font-size: 11px; }
-->
</style>
<div id="content">
  <div class="clear">
    <!--right-->
    <!--left-->
    <div id="left">
      <div class="left-indent">
        <div class="clear">
          <div class="wrapper-box module_menu">
            <div class="border-top">
              <div class="border-bottom">
                <div class="border-left">
                  <div class="border-right">
                    <div class="corner-top-left">
                      <div class="corner-top-right">
                        <div class="corner-bottom-left">
                          <div class="corner-bottom-right clear">
                            <div class="wrapper-box-indent">
                              <div class="box-title">
                                <div class="border1-top">
                                  <div class="border1-bottom">
                                    <div class="border1-left">
                                      <div class="border1-right">
                                        <div class="corner1-top-left">
                                          <div class="corner1-top-right">
                                            <div class="corner1-bottom-left">
                                              <div class="corner1-bottom-right clear">
                                                <h3>Main menu</h3>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="main-box">
                                <div class="clear">
                                  <ul class="menu">
                                    <li id="current" class="active item1"> <a href="">
									<span>Home</span></a></li>
                                    <li class="item2"><a href=""><span>Get Crime Alert </span></a></li>
                                    <li class="item59"><a href="">Register Your FIR </a></li>
                                    <li class="item60"><a href="">Police Station </a></li>
                                    <li class="item61"><a href=""><span>Contact Us</span></a></li>
                                    <li class="item62"><a href=""><span>Search</span></a></li>
                                    <li class="item63"><a href=""><span>What's New? </span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper-box module s1">
            <div class="border-top">
              <div class="border-bottom">
                <div class="border-left">
                  <div class="border-right">
                    <div class="corner-top-left">
                      <div class="corner-top-right">
                        <div class="corner-bottom-left">
                          <div class="corner-bottom-right clear">
                            <div class="wrapper-box-indent">
                              <div class="box-title">
                                <div class="border1-top">
                                  <div class="border1-bottom">
                                    <div class="border1-left">
                                      <div class="border1-right">
                                        <div class="corner1-top-left">
                                          <div class="corner1-top-right">
                                            <div class="corner1-bottom-left">
                                              <div class="corner1-bottom-right clear">
                                                <h3>Popular</h3>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="main-box">
                                <div class="clear">
                                  <ul class="mostread s1">
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">FIR Registration Guidelines</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Joomla! Overview</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Extensions</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">What's New in 1.5?</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Welcome to Joomla!</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Content Layouts</a></li>
                                    <li class="mostread s1"><a 	href="5" class="mostread s1">Joomla! Features</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="container" class="wrapper-container">
      <div class="corner-top-left">
        <div class="corner-top-right">
          <div class="corner-bottom-left">
            <div class="corner-bottom-right">
   <form action="chkPolicestationdetail.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h2><span class="componentheading style6">
				  <span class="style10">Information about Police Station:</span></span> </h2>
                </div>
                <p>&nbsp;</p>
                <table width="770" height="325" border="0" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Police Station Name: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="psname" type="text" id="psname" size="35" />
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
                      <textarea name="address" cols="32" rows="3"  id="address"></textarea>
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
                      <input name="pincode" type="text" id="pincode" maxlength="6" />
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
					<span class="style19" style="color: #000000">Email-id</span>: </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
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
					<input type="text" name="contactno" id="contactno" maxlength="12" />
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
					<input name="contactperson" type="text" id="contactperson" size="35" />
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
					<input type="text" name="sdate" id="sdate" /></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <input name="reset" type="reset" class="header-button" value="Reset" />
                <input name="next"  type="submit" class="header-button" id="next" value="Submit"/>
                <p>&nbsp;</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--footer-->
    <div class="footer clear">
    	<span>Business © 2009  |  <a href="#">Privacy Policy</a></span>
    	<a href="http://www.joomla.org/">Joomla!</a> is Free Software 
released under the GNU/GPL License. &nbsp;&nbsp;&nbsp;<!--{%FOOTER_LINK} -->
    </div>
</div>
<!--osc3.template-help.com -->


</body></html>