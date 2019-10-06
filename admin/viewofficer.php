<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
$selectAllUserQuery = "select *from mstr_officer";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>

 
      <h1>View officerdetails </h1>  <a href="officerdetail.php">Add officer</a> | 
	  <?=base64_decode($_GET['msg'])?></strong>
      <table width="85%">
        <tr>
          <th colspan="8" class="first"><strong>List of officer</strong></th>
        </tr>
        <tr>
          	<td width="7%">No.</td>
			<td width="7%">username</td>
			<td width="7%">join date	</td>
			<td width="7%">last date</td>
			<td width="6%">policesation name</td>
			<td width="8%">designation name</td>
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
		<td><?=$record["username"];?></td>
		<td><?=$record["Jdate"];?></td>
		<td><?=$record["Ldate"];?></td>
		<td><?=$record["policestation_name"];?></td>
		<td><?=$record["designat5ion_name"];?></td>
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
