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

					include("connection.php");

					$mCSNO = $_GET['CS_NO'];
					echo "$mCSNO <br><br>";
					$query = "DELETE FROM CUSTOMER WHERE CS_NO ='$mCSNO'";
					$sql = mysql_query($query);


					$query = "SELECT count(*) as cnt FROM CUSTOMER WHERE  CS_NO = '$mCSNO'";
					$sql   = mysql_query($query);
					$data  = mysql_fetch_array($sql);

					if ($data['cnt'] == 0)
				    {
						echo "The file has been deleted";
					} else
					{
						echo "The file failed to delete. Try again later";
					}
				?>

					
			</div>
			
			<!-- Footer -->
			<div id="footer">
				
			</div>
		</div>
	</body>
</html>