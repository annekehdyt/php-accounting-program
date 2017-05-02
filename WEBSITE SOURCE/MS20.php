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
				<h3>Find Data By</h3>

				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
					<select name="MS">
						<option value="SP_NO">ID</option>
						<option value="SP_NAME">Name</option>
						<option value="SP_CITY">City</option>
						<option value="SP_PHONE">Phone</option>
						<option value="SP_EMAIL">Email</option>
						<option value="SP_NPWP">NPWP</option>
					</select>
			

					<input type="text" name="name"/>
					<input type="submit" name="Submit"/>

			</form>
			</br>


			<?php
				$msVar = htmlentities($_POST['MS']);
				$no = 1;
				if(isset($_POST['name'])){
					$name = htmlentities($_POST['name']);
					$query = "SELECT count(*) as cnt FROM SUPPLIER WHERE  $msVar = '$name'";
					$sql   = mysql_query($query);
					$data  = mysql_fetch_array($sql);
					

					if ($data['cnt'] == 0)
				    {
						echo "This data is not exist";
					}
					else
					{
						
					
						$query = "select SP_NO, SP_NAME, SP_ADDR, SP_CITY, SP_PHONE, SP_EMAIL, SP_NPWP
										  from SUPPLIER where $msVar = '$name'";
						$sql = mysql_query ($query);
						while ($DATAREC = mysql_fetch_array ($sql)) {
							$F1 = $DATAREC['SP_NO'];
							$F2 = $DATAREC['SP_NAME'];
							$F3 = $DATAREC['SP_ADDR'];
							$F4 = $DATAREC['SP_CITY'];
							$F5 = $DATAREC['SP_PHONE'];
							$F6 = $DATAREC['SP_EMAIL'];
							$F7 = $DATAREC['SP_NPWP'];
							$warna = ($no%2==1)?"#ffffff":"#efefef";

						?>
						
						 <table cellpadding='5' cellspacing='0' border='0' width='500'>
						 <tr><td>Supp-No				</td><td>:</td><td> <td><?=$F1?></td></br>
						 <tr><td>Supplier Name	</td><td>:</td><td> <td><?=$F2?></td></br>
						 <tr><td>Address				</td><td>:</td><td> <td><?=$F3?></td></br>
						 <tr><td>City					</td><td>:</td><td> <td><?=$F4?></td></br>
						 <tr><td>Telephone			</td><td>:</td><td> <td><?=$F5?></td></br>
						 <tr><td>Email					</td><td>:</td><td> <td><?=$F6?></td></br>
						 <tr><td>NPWP					</td><td>:</td><td> <td><?=$F7?></td></br>
						 
						 <tr><td><a href="MS23.php?SP_NO=<?=$F1?>" onclick="return confirm('Delete File?');">Delete</a>
					   	  &nbsp;
						 <td><a href="MS21.php?SP_NO=<?=$F1?>" >Edit</a></br>
						 </table>


						<?php

							}

					}
					}
				

			?>

			</div>
			
			<!-- Footer -->
			<div id="footer">
			
			</div>
		</div>
	</body>
</html>