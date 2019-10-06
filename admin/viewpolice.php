<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
$selectAllUserQuery = "select *from policestation";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>

 
      <h1>View policestationdetails </h1>  <a href="policestationdetail.php">Add police</a> | 
	  <?=base64_decode($_GET['msg'])?></strong>
      <table width="85%">
        <tr>
          <th colspan="8" class="first"><strong>List of officer</strong></th>
        </tr>
        <tr>
          	<td width="7%">No.</td>
			<td width="7%">policestation name</td>
			<td width="7%">areaname	</td>
			<td width="7%">address</td>
			<td width="6%">pincode</td>
			<td width="8%">contact no</td>
			<td width="6%">emailid</td>
			<td width="8%">city name</td>
			<td width="8%">contact person</td>
			<td width="5%">Edit</td>
			<td width="5%">Delete</td>
        </tr>
        <?
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	<tr class="row-a">
		<td>
		<?=$i++></td>
		<td><?=$record["policestation_name"];?></td>
		<td><?=$record["area_name"];?></td>
		<td><?=$record["address"];?></td>
		<td><?=$record["pincode"];?></td>
		<td><?=$record["contact_no"];?></td>
		<td><?=$record["Email_id"];?></td>
		<td><?=$record["city_name"];?></td>
		<td><?=$record["contact_person"];?></td>
		<td><a href="editofficer.php?username=<?=$record["username"];?>">Edit</a></td>
	    <td><a href="deleteofficer.php?username=<?=$record["username"];?>">Delete</a></td>
  </tr>
<?
}
?>
</table>     
    </div>
  </div>
<? include("footer.php");?>
