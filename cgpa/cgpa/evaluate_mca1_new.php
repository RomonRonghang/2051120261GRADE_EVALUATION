<?php
session_start();
?>

<html>
	<head>
		<link rel="stylesheet" href="css/main.css" />
			<style type="text/css">
				<!--
				.ed{
				border-style:solid;
				border-width:thin;
				border-color:#00CCFF;
				padding:5px;
				margin-bottom: 4px;
				}
				#button1{
				text-align:center;
				font-family:Arial, Helvetica, sans-serif;
				border-style:solid;
				border-width:thin;
				border-color:#00CCFF;
				padding:5px;
				background-color:#00CCFF;
				height: 34px;
				}
				-->
			</style>
	</head>
	<body>
		<div id="mainwrapper">
			<div id="header">
				<img src="images/nitt.png">
			</div>
			<div id="menu">
				<ul>
					<li>
						<a href="index1.php">Home</a>
					</li>
					<li>
						<a href="grade1.php">Back</a>
					</li>
					<li>
						<a href="logout.php">Logout</a>
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>
	
		<div id="main" style="padding:20px; text-align:justify; font-family:arial;">
		
		<?php
			$con=mysql_connect("localhost","root","") or die (mysql_error());
			$db=mysql_select_db('grade',$con) or die (mysql_error());
			$q=$_POST['roll'];
			$qres=mysql_query("select * from info where roll='$q' ");
			$res=mysql_fetch_array($qres);			
		?>
		
<table width="300" height="40" border="2" align="center" cellpadding="5" cellspacing="5">
		<tr>
		<td><div align="LEFT" >ROLL NO</div></td>
		<td width="116"><?php echo $res['roll'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >NAME</div></td>
		<td><?php echo $res['name'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >COURSE</div></td>
		<td><?php echo $res['course'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >SEMESTER</div></td>
		<td><?php echo $res['sem'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >C PROGRAMMING</div></td>
		<td><?php echo $res['c'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >COMPUTER ORGANIZATION AND ARCHITECTURE</div></td>
		<td><?php echo $res['coa'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >DISCRETE MATHS</div></td>
		<td><?php echo $res['dm'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >ACCOUNTANCY</div></td>
		<td><?php echo $res['acc'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >NUMERICAL ANALYSIS</div></td>
		<td><?php echo $res['num'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >C LAB</div></td>
		<td><?php echo $res['clab'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >BUSINESS ORGANIZATION</div></td>
		<td><?php echo $res['bo'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >TOTAL GRADE</div></td>
		<td><?php echo $res['totalgrade'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >REMARKS</div></td>
		<td><?php echo $res['remarks'] ?></td>
		</tr>
</table>
	</body>
</html>