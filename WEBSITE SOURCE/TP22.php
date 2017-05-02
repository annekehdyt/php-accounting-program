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
				TRANSACTION
				<ul>
					<li> <a href="TS10.php" class="sidelinks"> Entry Sales </a></li>
					<li> <a href="TS20.php" class="sidelinks"> Modify Sales </a></li>
					<li> <a href="TS30.php" class="sidelinks">List Sales</a></li>
					</br>
					<li> <a href="TP10.php" class="sidelinks"> Entry Purchase </a></li>
					<li> <a href="TP20.php" class="sidelinks"> Modify Purchase </a></li>
					<li> <a href="TP30.php" class="sidelinks">List Purchase</a></li>
				</ul>
			</div>
			
			<!-- Contents -->
			<div id="body">		
				<?php

					include "connection.php";

					$mPCFC		= $_POST['PC_FC'];
					$mPCDATE	= $_POST['PC_DATE'];
					$mPCSUPP	= $_POST['PC_SUPP'];
					$mPCADDR	= $_POST['PC_ADDR'];
					$mPCDET		= $_POST['PC_DET'];
					$mPCAMT		= $_POST['PC_AMT'];

					$query = "UPDATE PURCHASE SET 
										PC_FC = '$mPCFC', 
										PC_DATE = '$mPCDATE', 
										PC_SUPP = '$mPCSUPP',
										PC_ADDR= '$mPCADDR', 
										PC_DET = '$mPCDET', 
										PC_AMT = '$mPCAMT',
							  WHERE PC_FC = '$mPCFC'";
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