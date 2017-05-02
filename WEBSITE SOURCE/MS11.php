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
				<h3>Input Data</h3>
				<form action="MS12.php" method="post">
				
					<?php

					   /* 
					   *	bagian ini akan dijalankan ketika proses SUBMIT dari form
					   *
					   * 
						*/

					   $mSPNO = $_POST['SP_NO'];
					   
					   /*
					   *	To check the existance of data
					   *	through query
					   */

					   $query = "SELECT count(*) as cnt FROM SUPPLIER WHERE SP_NO ='$mSPNO'";
					   $sql   = mysql_query($query);
					   $data  = mysql_fetch_array($sql);
					   
					   /*
					   *	If the data does not exist
					   *	Display the data and insert tuple
					   */

					   if ($data['cnt'] == 0)
						  {

						  /*
						  *	Go to insert.php
						  */

						  //echo "<form method='post' action='insert.php'>";

						  echo "<table cellpadding='5' cellspacing='0' border='0' width='700'>";
					      //echo "<tr><td>Supp-No			</td><td>:</td><td> <input type='text' name='SP_NO'     maxlength='08'  value=$mCSNO </td></tr>";
						  echo "<tr><td>Supp-No				</td><td>:</td><td> $mSPNO </td></tr>";
						  echo "<tr><td>Supplier Name	</td><td>:</td><td> <input type='text' name='SP_NAME' maxlength='40' size='50' value='".$data['SP_NAME']."'></td></tr>";
						  echo "<tr><td>Address				</td><td>:</td><td> <input type='text' name='SP_ADDR' value='".$data['SP_ADDR']."'></td></tr>";
						  echo "<tr><td>City					</td><td>:</td><td> <input type='text' name='SP_CITY' value='".$data['SP_CITY']."'></td></tr>";
						  echo "<tr><td>Telephone			</td><td>:</td><td> <input type='text' name='SP_PHONE' value='".$data['SP_PHONE']."'></td></tr>";
						  echo "<tr><td>Email					</td><td>:</td><td> <input type='text' name='SP_EMAIL' value='".$data['SP_EMAIL']."'></td></tr>";
						  echo "<tr><td>NPWP					</td><td>:</td><td> <input type='text' name='SP_NPWP' value='".$data['SP_NPWP']."'></td></tr>";
						  echo "</table>";

						  echo "<input type='hidden' name='SP_NO' value=$mSPNO>";
						  echo "<input type='submit' name='submit' value='Save'>";

						  echo "</form>";
						  }
					   else
						  {
						  // Exist

						  echo "This data is already exist";

						  /*
						  $query = "SELECT * FROM CUSTOMER WHERE CS_NO ='$mCSNO'";
						  $sql = mysql_query($query);
						  if($sql === FALSE)
							{
							 die(mysql_error()); // TODO: better error handling
							}
							 $data= mysql_fetch_array($sql);
							 echo "<font color='green'>========= Edit Record ===========";
							 echo "<form method='post' action='AREU01_update.php'>";
							 echo "<table>";
							 echo "<tr><td>Cust-No				</td><td>:</td><td>       ".$data['CS_NO']."</td></tr>";
							 echo "<tr><td>Customer Name	</td><td>:</td><td> <input type='text' name='CS_NAME'  maxlength='40' size='50' value='".$data['CS_NAME']."'></td></tr>";
							 echo "<tr><td>Address1				</td><td>:</td><td> <input type='text' name='CS_ADDR1' value='".$data['CS_ADDR1']."'></td></tr>";
							 echo "<tr><td>Address2				</td><td>:</td><td> <input type='text' name='CS_ADDR2' value='".$data['CS_ADDR2']."'></td></tr>";
							 echo "<tr><td>City					</td><td>:</td><td> <input type='text' name='CS_CITY'  value='".$data['CS_CITY']."'></td></tr>";
							 echo "<tr><td>Telephone			</td><td>:</td><td> <input type='text' name='CS_TELP'  value='".$data['CS_TELP']."'></td></tr>";
							 echo "</table>";
							 echo "<input type='hidden' name='CS_NO' value='".$data['CS_NO']."'>";
							 echo "<input type='submit' name='submit' value='Save'>";
							 echo "</form>";
							 */
						 }
					

					?>

				<!--
				<table>
					<tr>
						<td>Customer Code</td>
						<td>:</td>
						<td><?php echo $_POST["CS_NO"]; ?></td>
					</tr>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><?php echo $_POST["CS_NAME"]; ?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td>:</td>
						<td><?php echo $_POST["CS_ADDR"]; ?></td>
					</tr>
					<tr>
						<td>City</td>
						<td>:</td>
						<td><?php echo $_POST["CS_CITY"]; ?></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>:</td>
						<td><?php echo $_POST["CS_PHONE"]; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?php echo $_POST["CS_EMAIL"]; ?></td>
					</tr>
					<tr>
						<td>N.P.W.P</td>
						<td>:</td>
						<td><?php echo $_POST["CS_NPWP"]; ?></td>
					</tr>
				</table>
				-->
				<!--
				</br>
				<button>Save</button>
				<button>Cancel</button> 
				</form>
				-->
			</div>
			
			<!-- Footer -->
			<div id="footer">
			
			</div>
		</div>
	</body>
</html>

<?php
include 'connection.php';
?>