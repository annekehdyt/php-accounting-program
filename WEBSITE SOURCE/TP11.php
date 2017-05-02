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
			<h3>1 Record added</h3>
				<?php

					$mSLAMT = intval($_POST['PC_AMT']);
					$mSLSUM = intval($_POST['PC_SUM']);

					//$date = $_POST['PC_DATE'];
					//list($year, $month, $day) = split('[/.-]', $date);


					include 'connection.php';

					$sql="INSERT INTO PURCHASE (PC_FC, PC_DATE, PC_SUPP, PC_ADDR, PC_DET, PC_AMT)
					VALUES
					('$_POST[PC_FC]', '$_POST[PC_DATE]', '$_POST[PC_SUPP]','$_POST[PC_ADDR]','$_POST[PC_DET]', $mSLAMT)";

					if (!mysql_query($sql,$conn))
					  {
					    die('Error: ' . mysql_error());
					  }

					echo "1 record added";

					mysql_close($conn);

				?>
			</div>
			
			
			
			<!-- Footer -->
			<div id="footer">
			
			</div>
		</div>
	</body>
</html>