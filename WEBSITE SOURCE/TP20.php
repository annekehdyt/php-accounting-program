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
				<h3>Find Data By</h3>

				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
					<select name="TP">
						<option value="PC_FC">Factur-No</option>
						<option value="PC_DATE">Date</option>
						<option value="PC_SUPP">Supp-No</option>
					</select>

					<input type="text" name="name"/>
					<input type="submit" name="Submit"/>
			</form>
			</br>


			<?php
				include 'connection.php';

				$msVar = htmlentities($_POST['TP']);
				$no = 1;

				if(isset($_POST['name']))
				{
					$name = htmlentities($_POST['name']);
					$query = "SELECT count(*) as cnt FROM PURCHASE WHERE  $msVar = '$name'";
					$sql   = mysql_query($query);
					$data  = mysql_fetch_array($sql);
					
					if ($data['cnt'] == 0)
				    {
						echo "This data is not exist";
					}
					else
					{
						$query = "select PC_FC, PC_DATE, PC_SUPP, PC_ADDR, PC_DET, PC_AMT
										  from PURCHASE where $msVar = '$name'";
						$sql = mysql_query ($query);
						while ($DATAREC = mysql_fetch_array ($sql)) 
						{
							$F1 = $DATAREC['PC_FC'];
							$F2 = $DATAREC['PC_DATE'];
							$F3 = $DATAREC['PC_SUPP'];
							$F4 = $DATAREC['PC_ADDR'];
							$F5 = $DATAREC['PC_DET'];
							$F6 = $DATAREC['PC_AMT'];
							$warna = ($no%2==1)?"#ffffff":"#efefef";

			?>

				<table cellpadding='5' cellspacing='0' border='0' width='500'>
					<tr><td>Factur Code     </td><td>:</td><td> <td><?=$F1?></td></br>
					<tr><td>Date                  </td><td>:</td><td> <td><?=$F2?></td></br>
					<tr><td>Supplier ID     </td><td>:</td><td> <td><?=$F3?></td></br>
					<tr><td>Address            </td><td>:</td><td> <td><?=$F4?></td></br>
					<tr><td>Details			  </td><td>:</td><td> <td><?=$F5?></td></br>
					<tr><td>Amount			  </td><td>:</td><td> <td><?=$F6?></td></br>
					
					<tr><td><a href="TP23.php?PC_FC=<?=$F1?>" onclick="return confirm('Delete File?');">Delete</a>
					&nbsp;
					<td><a href="TP21.php?PC_FC=<?=$F1?>" >Edit</a></br>
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