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
				<h3> Edit Data</h3>
				<?php

						 include("connection.php");

						$mSLFC = $_GET['SL_FC'];
						
						$query = "SELECT * FROM SALES WHERE SL_FC ='$mSLFC'";
						$sql = mysql_query($query);
						if($sql === FALSE) {
							die(mysql_error()); // TODO: better error handling
						}
						$data= mysql_fetch_array($sql);

						echo "<form method='post' action='TS22.php'>";
						echo "<table>";
						echo "<tr><td>Factur No			</td><td>:</td><td>".$data['SL_FC']."</td></tr>";
						echo "<tr><td>Date					</td><td>:</td><td><input type='text' name='SL_DATE'  value='".$data['SL_DATE']."'></td></tr>";
						echo "<tr><td>Cust-no			</td><td>:</td><td><input type='text' name='SL_CUST' value='".$data['SL_CUST']."'></td></tr>";
						echo "<tr><td>Address			</td><td>:</td><td><input type='text' name='SL_ADDR' value='".$data['SL_ADDR']."'></td></tr>";
						echo "<tr><td>Detail				</td><td>:</td><td><input type='text' name='SL_DET'  value='".$data['SL_DET']."'></td></tr>";
						echo "<tr><td>Amount				</td><td>:</td><td><input type='text' name='SL_AMT'  value='".$data['SL_AMT']."'></td></tr>";

						echo "</table>";
						echo "<input type='hidden' name='SL_FC' value='".$data['SL_FC']."'>";
						echo "<input type='submit' name='submit' value='Submit'>";
						echo "</form>";

					?>
				


			</div>
			
			
			
			<!-- Footer -->
			<div id="footer">
			
			</div>
		</div>
	</body>
</html>