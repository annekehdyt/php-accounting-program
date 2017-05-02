<!DOCTYPE html>
<html>
	<!-- HEAD -->
	<head>
		<title> Accounting Website </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>

	<!-- BODY -->
	<body>
		<div id="page">
		
			<!-- Header -->
			<div id="top_header">
				<a href="m/index.php" class="top_header">Mobile</a>
				<a href="index.php" class="top_header">PC</a>
			</div>
			
			<!-- Sub Header -->
			<div id="sub_header">
			<center>
				<a href="T000.php" class="transaction">Transaction</a>
				<a href="R000.php" class="report">Report</a>
				<a href="M000.php" class="master_file">Master File</a>
				<!-- <a href="utility.php" class="utility">Utility</a> -->
			</center>
			</div>
			
			<!-- Navigator Menu -->
			<div id="sidebar">
				MASTER
				<ul>
					<li> <a href="MC10.php" class="sidelinks">Add Customer</a></li>
					<li> <a href="MC20.php" class="sidelinks">Modify Customer</a></li>
					<li> <a href="MC30.php" class="sidelinks">List Customer</a></li>
					</br>
					<li> <a href="MS10.php" class="sidelinks">Add Supplier</a></li>
					<li> <a href="MS20.php" class="sidelinks">Modify Supplier</a></li>
					<li> <a href="MS30.php" class="sidelinks">List Supplier</a></li>
				</ul>
			</div>
			
			<?php
				include 'connection.php';
			?>
			
			<!-- Contents -->
			<div id="body">				
				<?php

					include "connection.php";

					$mCSNO    = $_POST['CS_NO'];
					$mCSNAME  = $_POST['CS_NAME'];
					$mCSADDR  = $_POST['CS_ADDR'];
					$mCSCITY = $_POST['CS_CITY'];
					$mCSPHONE = $_POST['CS_PHONE'];
					$mCSEMAIL  = $_POST['CS_EMAIL'];
					$mCSNPWP  = $_POST['CS_NPWP'];

					$query = "UPDATE CUSTOMER
							  SET CS_NAME = '$mCSNAME', CS_ADDR = '$mCSADDR', CS_CITY = '$mCSCITY',
										  CS_PHONE = '$mCSPHONE', CS_EMAIL = '$mCSEMAIL', CS_NPWP = '$mCSNPWP'
							  WHERE CS_NO = '$mCSNO'";
					$sql= mysql_query($query);

					if ($sql) echo "Data has been updated<br><br>";		  
					else echo "Data update failed<br><br>";


					echo "<a href='index.php?'>Home</a>";
					?>

			</div>
			
			<!-- Footer -->
			<div id="footer">
			
			</div>
		</div>
	</body>
</html>