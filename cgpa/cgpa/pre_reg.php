<?php
session_start();
?>
<html>
	<head> <title> </title>
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

<form action="" method="post" onsubmit="return validateForm()">	<br/>
	Firstname <br/><input name="fname" type="text" class="ed" id="fname" /> <br/><br/>
	Lastname <br/><input name="lname" type="text" class="ed" id="lname" /> <br/><br/>
	Gender <br/>&nbspMale<input type="radio" name="gender" value="male"/> &nbsp Female<input type="radio" name="gender" value="female"/> <br/><br/>
	Email <br/><input name="email" type="text" class="ed" id="email" /> <br/><br/>
	Address<br/> <textarea name="address" class="ed"></textarea>	<br/><br/>
	Birthday<br/> 
	<select name="day" class="ed">
		<option>Days</option>
		<?php
			$N = 32;
			for($i=1; $i < $N; $i++)
			{
			echo '<option>'.$i.'</option>';
			}
		?>
	</select>
	<select name="month" class="ed">
		<option>Month</option>
		<?php
			$N = 13;
			for($i=1; $i < $N; $i++)
			{
			echo '<option>'.$i.'</option>';
			}
		?>
	</select>
	<select name="year" class="ed">
		<option>Year</option>
		<?php
			$N = 2020;
			for($i=1889; $i < $N; $i++)
			{
			echo '<option>'.$i.'</option>';
			}
		?>
	</select> <br/><br/>
	Department<br />
		<select name="dept" class="ed">
		<option>Please select department</option>
		<option>Computer Applications</option>
		<option>Computer Science and Engineering</option>
		</select> <br/><br/>
	Course<br />
		<select name="course" class="ed">
		<option>Please select course</option>
		<option>B.Tech</option>
		<option>M.Tech</option>
		<option>MCA</option>
		<option>MSc</option>
		<option>Phd</option>
		</select> <br/><br/>
	Roll No<br /><input name="roll" type="text" class="ed" id="roll" />	<br/><br/>
	Batch<br/>	<select name="batch" class="ed">
		<option>Please select batch</option>
		<option>Batch Year</option>
	<?php
		$N = 2030;
		for($i=1980; $i <= $N; $i++)
		{
		echo '<option>'.$i.'</option>';
		}
	?>
	</select><br/><br/>
	<input type="submit" name="Submit" value="save" id="button1" />
</form>
</div>
		<div id="footer">
		</div>
		<div class="clearfix"></div>
	</div>
</body>
</html>


<?php
	$con=mysql_connect("localhost","root","") or die (mysql_error()); 
	$db=mysql_select_db('cgpa',$con) or die (mysql_error());

	$male_status = 'unchecked';
	$female_status = 'unchecked';
	if(isset($_POST['Submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		if(isset($_POST['gender'])) {
			$gender=$_POST['gender'];
			
			if($gender=='male'){
				$male_status = 'checked';
			}
			else if($gender=='female'){
				$female_status = 'checked';
			}
		}
		$email=$_POST['email'];
		$address=$_POST['address'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];		
		$dob = $day.' '.$month.' '.$year;
		$dept = $_POST['dept'];
		$course = $_POST['course'];
		$roll=$_POST['roll'];
		$batch = $_POST['batch'];
		
		$que="insert into student_record(fname,lname,gender,email,address,dob,dept,course,roll,batch) values ('$fname','$lname','$gender','$email','$address','$dob','$dept','$course','$roll','$batch')";
		if(mysql_query($que)){
		echo"<script>alert('Student Registration Successful')</script>";
		echo"<script>window.open('pre_reg.php','_self')</script>";
	}
}

?>

