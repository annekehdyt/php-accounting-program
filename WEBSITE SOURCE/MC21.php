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
				<a href="T000.html" class="transaction">Transaction</a>
				<a href="R000.html" class="report">Report</a>
				<a href="M000.html" class="master_file">Master File</a>
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

						$mCSNO = $_GET['CS_NO'];
						echo "$mCSNO";
						$query = "SELECT * FROM CUSTOMER WHERE CS_NO ='$mCSNO'";
						$sql = mysql_query($query);
						if($sql === FALSE) {
							die(mysql_error()); // TODO: better error handling
						}
						$data= mysql_fetch_array($sql);

						echo "<form method='post' action='MC22.php'>";
						echo "<table>";
						echo "<tr><td>Cust-No</td><td>:</td><td>       <input type='text' name='CS_NO'  value='".$data['CS_NO']."'></td></tr>";
						echo "<tr><td>Customer Name</td><td>:</td><td> <input type='text' name='CS_NAME'  value='".$data['CS_NAME']."'></td></tr>";
						echo "<tr><td>Address</td><td>:</td><td>      <input type='text' name='CS_ADDR' value='".$data['CS_ADDR']."'></td></tr>";
						echo "<tr><td>City</td><td>:</td><td>      <input type='text' name='CS_CITY' value='".$data['CS_CITY']."'></td></tr>";
						echo "<tr><td>Phone</td><td>:</td><td>          <input type='text' name='CS_PHONE'  value='".$data['CS_PHONE']."'></td></tr>";
						echo "<tr><td>Email</td><td>:</td><td>     <input type='text' name='CS_EMAIL'  value='".$data['CS_EMAIL']."'></td></tr>";
						echo "<tr><td>NPWP</td><td>:</td><td>     <input type='text' name='CS_NPWP'  value='".$data['CS_NPWP']."'></td></tr>";

						echo "</table>";
						echo "<input type='hidden' name='CS_NO' value='".$data['CS_NO']."'>";
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