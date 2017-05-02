<?php
include "connection.php";
?>
<div id="content">
<font color="#8B2323">
	<h2>List Supplier</h2>
	<table  id="tabel">
		<tr bgcolor="#76EEC6">
			<th width="5%">No</td>
			<th width="10%">Data</td>
			<th width="15%">Balance</td>
		</tr>

	<?
		$no = 1;
		$query = "select SUM(SL_AMT) AS SUM
						  from SALES";
	    $sql = mysql_query ($query);
		while ($DATAREC = mysql_fetch_array ($sql)) {
				$F1 = $DATAREC['SUM'];
				$warna = ($no%2==1)?"#ffffff":"#efefef";
		}
	?>

		<tr bgcolor="<?=$warna?>">
			<td><?=$no?></td>
			<td>SALES BALANCE</td>
		    <td><?=$F1?></td>
		</tr>			

	<?
		$no = 2;
		$query = "select SUM(PC_AMT) AS SUM
		 				  from PURCHASE";
		$sql = mysql_query ($query);
		while ($DATAREC = mysql_fetch_array ($sql)) {
			$F2 = $DATAREC['SUM'];
			$warna = ($no%2==1)?"#ffffff":"#efefef";
		}
	?>

		<tr bgcolor="<?=$warna?>">
			<td><?=$no?></td>
			<td>PURCHASE BALANCE</td>
		    <td><?=$F2?></td>
		</tr>	
	
	<?
		$no = 3;
		$warna = ($no%2==1)?"#ffffff":"#efefef";
	?>

		<tr bgcolor="<?=$warna?>">
			<td><?=$no?></td>
			<td>TOTAL PROFIT</td>
			<td><?=($F2-$F1)?></td>
		</tr>
	</table>
	
	</br></br>
	<a href="R000.php"></a>
	</font>
</div>