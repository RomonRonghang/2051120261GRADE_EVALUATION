<?php
session_start();
if (isset($_SESSION['logged_in'] )) {
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>

</title>
		<link rel="stylesheet" href="css/main.css" />
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
		<img src="images/nitt.png" >
		</div>
		<div id="menu">
			<ul>
				<li>
					<a href="start.php">Back</a>
				</li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div id="main" style="padding:20px; text-align:justify; font-family:arial;">

<form action="login1.php" method="post">

  <div align="center"><strong> Administrator Login... <br/>
		<table width="258" border="1">
		  <tr>
			<td width="98"><div align="left"><strong>Username</strong></div></td>
		  <td width="144"><input name="u_name" type="text" id="u_name" /></td>
		</tr>
		  <tr>
			<td><div align="left"><strong>Password</strong></div></td>
		  <td><input name="u_pass" type="password" id="u_pass" /></td>
		</tr>      
		  <tr>
			<td colspan="2" align="left"><div align="center">
			  <input type="submit" name="Submit" value="Login" />
			</div></td>
		  </tr>
		</table>
  </div>
</form>
</body>
</html>

<?php
	$con=mysql_connect("localhost","root","") or die (mysql_error()); 
	$db=mysql_select_db('cgpa',$con) or die (mysql_error());

	if(isset($_POST['Submit']))
	{
		$name=$_POST['u_name'];
		$pass=$_POST['u_pass'];
		
		if($name==''){
			echo "<script>alert('Please Enter Your Username')</script>";
			exit();
		}
		if($pass==''){
			echo "<script>alert('Please Enter Your Password')</script>";
			exit();
		}
		else{	
			$que="select username,password from admin WHERE username='$name' AND password ='$pass'";
			if($q = mysql_query($que)){
			$row = mysql_num_rows($q);
				 if ( $row > 0 ) {
				 $_SESSION['logged_in'] = "true";
				 $_SESSION['user_name'] = $name;
					echo"<script>alert('Login Successful')</script>";
					echo"<script>window.open('index.php','_self')</script>";
				}
			}
		}
	}

?>