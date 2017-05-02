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
				<form action="TP11.php" method="post">
					<h3>Entry Purchase</h3>
					<table>
						<tr>
							<td>Factur Code</td>
							<td>:</td>
							<td><input type="text" name="PC_FC"></td>
						</tr>
						<tr>
							<td>Date</td>
							<td>:</td>
							<td><input type="date" name="PC_DATE"></td>
						</tr>
						<tr>
							<td>Supplier</td>
							<td>:</td>
							<td><input type="text" name="PC_SUPP"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td>:</td>
							<td><input type="text" name="PC_ADDR"></td>
						</tr>
						<tr>
							<td>Details</td>
							<td>:</td>
							<td><input type="text" name="PC_DET"></td>
						</tr>
						<tr>
							<td>Amount</td>
							<td>:</td>
							<td><input type="text" name="PC_AMT"></td>
						</tr>
				</table>
				
				</br>
				<input type="submit" name="submit" value="Submit">
				</form>
			</div>
			
			
			
			<!-- Footer -->
			<div id="footer">
			
			</div>
		</div>
	</body>
</html>