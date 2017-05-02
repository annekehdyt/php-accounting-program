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
				<!-- <a href="utility.html" class="utility">Utility</a> -->
			</center>
			</div>
			
			<!-- Navigator Menu -->
			<div id="sidebar">
				NAVIGATOR
			</div>
			
			<!-- Contents -->
			<div id="body">
					<?php

						 include("connection.php");

						$mSPNO = $_GET['SP_NO'];
						echo "$mSPNO";
						$query = "SELECT * FROM SUPPLIER WHERE SP_NO ='$mSPNO'";
						$sql = mysql_query($query);
						if($sql === FALSE) {
							die(mysql_error()); // TODO: better error handling
						}
						$data= mysql_fetch_array($sql);

						echo "<form method='post' action='MS22.php'>";
						echo "<table>";
						echo "<tr><td>Supp-No</td><td>:</td><td>       <input type='text' name='SP_NO'  value='".$data['SP_NO']."'></td></tr>";
						echo "<tr><td>Supplier Name</td><td>:</td><td> <input type='text' name='SP_NAME'  value='".$data['SP_NAME']."'></td></tr>";
						echo "<tr><td>Address</td><td>:</td><td>      <input type='text' name='SP_ADDR' value='".$data['SP_ADDR']."'></td></tr>";
						echo "<tr><td>City</td><td>:</td><td>      <input type='text' name='SP_CITY' value='".$data['SP_CITY']."'></td></tr>";
						echo "<tr><td>Phone</td><td>:</td><td>          <input type='text' name='SP_PHONE'  value='".$data['SP_PHONE']."'></td></tr>";
						echo "<tr><td>Email</td><td>:</td><td>     <input type='text' name='SP_EMAIL'  value='".$data['SP_EMAIL']."'></td></tr>";
						echo "<tr><td>NPWP</td><td>:</td><td>     <input type='text' name='SP_NPWP'  value='".$data['SP_NPWP']."'></td></tr>";

						echo "</table>";
						echo "<input type='hidden' name='SP_NO' value='".$data['SP_NO']."'>";
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