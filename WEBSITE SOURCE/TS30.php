<?php
include "connection.php";
?>
<div id="content">
<font color="#8B2323">
	<h2>List Sales</h2>
	<table  id="tabel">
	<tr bgcolor="#76EEC6">
      <th width="5%">No</td>
	  <th width="10%">Factur Code</td>
	  <th width="15%">Date</td>
	  <th width="25%">Cust-Code</td>
	  <th width="25%">Address</td>
	  <th width="10%">Detail</td>
	  <th width="10%">Amount</td>
	</tr>
	<?
	$no = 1;
	$query = "select SL_FC, SL_DATE, SL_CUST, SL_ADDR, SL_DET, SL_AMT
			  from SALES order by SL_FC";
	$sql = mysql_query ($query);
	while ($DATAREC = mysql_fetch_array ($sql)) {
		$F1 = $DATAREC['SL_FC'];
		$F2 = $DATAREC['SL_DATE'];
		$F3 = $DATAREC['SL_CUST'];
		$F4 = $DATAREC['SL_ADDR'];
		$F5 = $DATAREC['SL_DET'];
		$F6 = $DATAREC['SL_AMT'];
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
		<!--
		<td>
		<a href='AREU01_edit1.php?CS_NO=<?=$F1?>'>Edit</a>-->
		</br>
		</tr>	
	<? $no++; }?>
	</table>
	
	</br></br>
	<a href="T000.php">Home</a>
</div>
<br>
<!--<?php include("footer.php"); ?>
-->