<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>

</title>
<link rel="stylesheet" href="css/main.css" />
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

<form action="reg.php" method="post">

  <div align="center"><strong>Student Sign Up here
    <table width="258" border="1">
      <tr>
        <td width="98"><div align="right"><strong>Username</strong></div></td>
      <td width="144"><input name="u_name" type="text" id="u_name" /></td>
    </tr>
      <tr>
        <td><div align="right"><strong>Password</strong></div></td>
      <td><input name="u_pass" type="password" id="u_pass" /></td>
    </tr>
      <tr>
        <td><div align="right"><strong>Roll No </strong></div></td>
      <td><input name="roll" type="text" id="roll" /></td>
    </tr>
      <tr>
        <td><div align="right"><strong>Email</strong></div></td>
        <td><input name="email" type="text" id="email" /></td>
      </tr>
      <tr>
        <td colspan="2" align="left"><div align="center">
          <input type="submit" name="Submit" value="Sign Up" />
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
	$roll=$_POST['roll'];
	$email=$_POST['email'];
	
	if($name==''){
		echo "<script>alert('Please Enter Your Username')</script>";
		exit();
	}
	if($pass==''){
		echo "<script>alert('Please Enter Your Password')</script>";
		exit();
	}
	if($roll==''){
		echo "<script>alert('Please Enter Your Roll No')</script>";
		exit();
	}
	if($email==''){
		echo "<script>alert('Please Enter Your Email Id')</script>";
		exit();
	}
else {	
$que="insert into registration(username,password,roll,email) values ('$name','$pass','$roll','email')";
if(mysql_query($que)){
echo"<script>alert('Registration Successful')</script>";
echo"<script>window.open('login2.php','_self')</script>";
}
}
}

?>