<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> </title>
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
		<div id="header"> <img src="images/nitt.png"> </div>
		<div id="menu">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="details.php">View Student Details</a>
				</li>
				<li>
					<a href="evaluate.php">Examination Grades</a>
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
	$db=mysql_select_db('cgpa',$con) or die (mysql_error());
	$q=$_POST['roll'];
	$qres=mysql_query("select * from student_record where roll='$q'");
	$res=mysql_fetch_array($qres);
	
?>

<table width="300" height="40" border="2" align="center" cellpadding="5" cellspacing="5">
		<tr>
		<td><div align="LEFT" >ROLL NO</div></td>
		<td width="116"><?php echo $res['roll'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >FIRST NAME</div></td>
		<td><?php echo $res['fname'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >LAST NAME</div></td>
		<td><?php echo $res['lname'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >GENDER</div></td>
		<td><?php echo $res['gender'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >ADDRESS</div></td>
		<td><?php echo $res['address'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >DEPARTMENT</div></td>
		<td><?php echo $res['dept'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >COURSE</div></td>
		<td><?php echo $res['course'] ?></td>
		</tr>
		<tr>
		<td><div align="LEFT" >BATCH</div></td>
		<td><?php echo $res['batch'] ?></td>
		</tr>
</table>

</body>
</html>
