<?php
include "connection.php";
?>
<div id="content">
<font color="#8B2323">
	<h2>List Customer</h2>
	<table  id="tabel">
	<tr bgcolor="#76EEC6">
      <th width="10%">No</td>
	  <th width="30%">Customer Code</td>
	  <th width="50%">Customer Name</td>
	  <th width="35%">Balance</td>
	</tr>

	<?
	$no = 1;
	$query = "select distinct CS_NO, CS_NAME, SUM(SL_AMT) AS BALANCE
			  from CUSTOMER, SALES where CS_NO = SL_CUST 
			  group by CS_NO, CS_NAME
			  order by CS_NO";
	$sql = mysql_query ($query);
	while ($DATAREC = mysql_fetch_array ($sql)) {
		$F1 = $DATAREC['CS_NO'];
		$F2 = $DATAREC['CS_NAME'];
		$F3 = $DATAREC['BALANCE'];
		$warna = ($no%2==1)?"#ffffff":"#efefef";
		//
		//tampilkan data customer
	?>
		<tr bgcolor="<?=$warna?>">
		<td><?=$no?></td>
		<td><?=$F1?></td>
		<td><?=$F2?></td>
		<td><?=$F3?></td>
		<!--
		<td>
		<a href='AREU01_edit1.php?CS_NO=<?=$F1?>'>Edit</a>-->
		</br>
		</tr>	
	<? $no++; }?>
	</table>
	
	</br></br>
	<a href="R000.php">Back</a>
</div>
<br>
<!--<?php include("footer.php"); ?>
-->