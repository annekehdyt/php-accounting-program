<?php
include "connection.php";
?>
<div id="content">
<font color="#8B2323">
	<h2>List Customer</h2>
	<table  id="tabel">
	<tr bgcolor="#76EEC6">
      <th width="3%">No</td>
	  <th width="7%">Cust-No</td>
	  <th width="15%">Cust-Name</td>
	  <th width="15%">Address</td>
	  <th width="10%">City</td>
	  <th width="10%">Telephone</td>
	  <th width="10%">Email</td>
	  <th width="10%">NPWP</td>
	</tr>
	<?
	$no = 1;
	$query = "select CS_NO, CS_NAME, CS_ADDR, CS_CITY, CS_PHONE, CS_EMAIL, CS_NPWP
			  from CUSTOMER order by CS_NO";
	$sql = mysql_query ($query);
	while ($DATAREC = mysql_fetch_array ($sql)) {
		$F1 = $DATAREC['CS_NO'];
		$F2 = $DATAREC['CS_NAME'];
		$F3 = $DATAREC['CS_ADDR'];
		$F4 = $DATAREC['CS_CITY'];
		$F5 = $DATAREC['CS_PHONE'];
		$F6 = $DATAREC['CS_EMAIL'];
		$F7 = $DATAREC['CS_NPWP'];
		$warna = ($no%2==1)?"#ffffff":"#efefef";
		//
		//tampilkan data customer
	?>
		<tr bgcolor="<?=$warna?>">
		<td><?=$no?></td>
		<td><?=$F1?></td>
		<td><?=$F2?></td>
		<td><?=$F3?></td>
		<td><?=$F4?></td>
		<td><?=$F5?></td>
		<td><?=$F6?></td>
		<td><?=$F7?></td>
		<!--
		<td>
		<a href='AREU01_edit1.php?CS_NO=<?=$F1?>'>Edit</a>-->
		</br>
		</tr>	
	<? $no++; }?>
	</table>
	
	</br></br>
	<a href="M000.php">Back</a>
</div>
<br>
<!--<?php include("footer.php"); ?>
-->