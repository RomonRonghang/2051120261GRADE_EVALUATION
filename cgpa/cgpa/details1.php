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
					<a href="index1.php">Home</a>
				</li>
				<li>
					<a href="pre_reg.php">Student Pre Registration</a>
				</li>
				<li>
					<a href="details1.php">View Student Details</a>
				</li>
				<li>
					<a href="grade1.php">Examination Grades</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div id="main" style="padding:20px; text-align:justify; font-family:arial;">
<form action = "details_new1.php" method= "post">

Roll No <br/><input name="roll" type="text" class="ed"/>
<input type="submit" name="Submit" value="ENTER" id="button1" />

</form>
</body>
</html>
