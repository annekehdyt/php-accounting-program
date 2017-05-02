<?php
include "connection.php";
?>
<div id="content">
<font color="#8B2323">
	<h2>List Supplier</h2>
	<table  id="tabel">
	<tr bgcolor="#76EEC6">
      <th width="5%">No</td>
	  <th width="10%">Cust-No</td>
	  <th width="15%">Cust-Name</td>
	  <th width="25%">Address</td>
	  <th width="10%">City</td>
	  <th width="10%">Telephone</td>
	  <th width="10%">Email</td>
	  <th width="10%">NPWP</td>
	  <th>Action</td>
	</tr>
	<?
	$no = 1;
	$query = "select SP_NO, SP_NAME, SP_ADDR, SP_CITY, SP_PHONE, SP_EMAIL, SP_NPWP
			  from SUPPLIER order by SP_NO";
	$sql = mysql_query ($query);
	while ($DATAREC = mysql_fetch_array ($sql)) {
		$F1 = $DATAREC['SP_NO'];
		$F2 = $DATAREC['SP_NAME'];
		$F3 = $DATAREC['SP_ADDR'];
		$F4 = $DATAREC['SP_CITY'];
		$F5 = $DATAREC['SP_PHONE'];
		$F6 = $DATAREC['SP_EMAIL'];
		$F7 = $DATAREC['SP_NPWP'];
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
	<a href="MS00.php"></a>
</div>
<br>
<!--<?php include("footer.php"); ?>
-->