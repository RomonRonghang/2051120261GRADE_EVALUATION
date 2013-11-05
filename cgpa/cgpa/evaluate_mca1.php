<?php
  error_reporting(0);
?>

<?php 
 	  
  	    $name =$_REQUEST['name']; 
		$roll = $_REQUEST['roll'];
		$course = $_REQUEST['course']; 
		$sem = $_REQUEST['sem'];
       
   		
  if (isset($_REQUEST['solve']))
       {
	   
	   $c = $_REQUEST['c'];
	   $coa = $_REQUEST['coa'];
       $dm = $_REQUEST['dm']; 
	   $num = $_REQUEST['num']; 
	   $acc = $_REQUEST['acc']; 
	   $clab = $_REQUEST['clab']; 
	   $bo = $_REQUEST['bo']; 
	   
	    $solve1 = ($_REQUEST['c'] * 3);
		$solve2 = ($_REQUEST['coa'] * 3);
		$solve3 = ($_REQUEST['dm'] * 3);
		$solve4 = ($_REQUEST['num'] * 3);
		$solve5 = ($_REQUEST['acc'] * 3);
		$solve6 = ($_REQUEST['clab'] * 2);
		$solve7 = ($_REQUEST['bo'] * 2);
		
		$totalgrade = ($solve1 + $solve2 + $solve3 + $solve4 + $solve5 + $solve6 + $solve7)/19;

		if ($totalgrade >= 5) 
	  	 {
          $remarks = "PASSED";
        }
       else {
           $remarks = "FAILED";
       }	
	}	
	
	if (isset($_REQUEST['clear']))
       {
	   $name = ""; 
	   $roll = "";
	   $course = ""; 
 	   $sem="";
	   $c = ""; 
	   $coa =  "";  
	   $dm = "";
	   $num = "";
       $acc = ""; 
	   $clab = "";
	   $bo = "";
       $total = "";
	   $remarks = ""; 
       }
	   
	if (isset($_REQUEST['save']))
       {
	  
		$name = strtoupper($_REQUEST['name']);
		$roll = strtoupper($_REQUEST['roll']);
		$course = strtoupper($_REQUEST['course']);
		$sem = strtoupper($_REQUEST['sem']);
		$c = $_REQUEST['c'];
		$coa = $_REQUEST['coa'];
		$dm = $_REQUEST['dm'];
		$num = $_REQUEST['num'];
		$acc = $_REQUEST["acc"];
		$clab = $_REQUEST['clab'];
		$bo = $_REQUEST['bo'];
		$totalgrade = $_REQUEST['totalgrade'];
		$remarks = strtoupper($_REQUEST['remarks']);

//CONNECT TO DATABASE--------------------
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("grade", $con);
	  
/*
 *  Specify the field names that are in the form. This is meant 
 *  for security so that someone can't send whatever they want 
 *  to the form.
 */
	$allowedFields = array(
	'name',
	'roll',
	'course',
	'sem',
	'c',
	'coa',
	'dm',
	'num',
	'acc',
	'clab',
	'bo',
	'totalgrade',
	'remarks'
	);
// Specify the field names that you want to require...
$requiredFields = array(
	'name',
	'roll',
	'course',
	'sem',
	'c',
	'coa',
	'dm',
	'num',
	'acc',
	'clab',
	'bo'
);

$errors = array();
foreach($_POST AS $key => $value)
{
	// first need to make sure this is an allowed field
	if(in_array($key, $allowedFields))
	{
		$$key = $value;
		
		// is this a required field?
		if(in_array($key, $requiredFields) && $value == '')	
		{
			$errors[] = "The field $key is required.";
		}
	}	
}

// were there any errors?
if(count($errors) > 0)
{
	$errorString = '<p>There was an error processing the form.</p>';
	$errorString .= '<ul>';
	foreach($errors as $error)
	{
		$errorString .= "<li>$error</li>";
	}
	$errorString .= '</ul>';

	echo  $errorString;	
  }
  else {
  $sql = "INSERT INTO info (name,roll,course,sem,c,coa,dm,num,acc,clab,bo,totalgrade,remarks) VALUES('$name','$roll', '$course', '$sem', '$c', '$coa','$dm','$num','$acc','$clab','$bo','$totalgrade','$remarks')";
  
			if(!$b=mysql_query($sql)){
				echo mysql_error();
			}
			else {
				    echo "<center>";
					echo "<h4> Record is Successfully added in the Database.</h4>";
					echo "</center>";
				    }
    }
  }
?>
	  
<html>
<head>
 <STYLE type="text/css">
     
      h2 { 
        text-align:center;
		color: white;                /* text color is white */ 
        background: green;            /* Content, padding will be blue */
        margin: 12px 12px 12px 12px;
        padding: 12px 0px 12px 12px; /* Note 0px padding right */
        list-style: none             /* no glyphs before a list item */
                                     /* No borders set */
      }
     
    </STYLE>
</head>
<body>
<h2> <marquee direction=left behavior=alternate>
 NIT Tiruchirappalli Student Grading System </marquee> </h2>
<br>
<div id="menu">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
			</ul>
</div>
<FORM NAME="form1" METHOD="POST" ACTION="">
<TABLE BORDER="0">
  <tr> </tr> <tr> </tr>
  <TR>
    <TD>Student Name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="30"MAXLENGTH=30
	    value="<?php echo $name; ?>">
		
	<TD>  Student Roll No</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="roll" SIZE="15" MAXLENGTH=35
	  value="<?php echo $roll; ?>">
	  </TD>
		 
	  
      <TD>  Course</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="course" SIZE="33" MAXLENGTH=35
	  value="<?php echo $course; ?>">
	  </TD>
	  
	 <TD> Semester</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="sem" SIZE="33" MAXLENGTH=35
	  value="<?php echo $sem; ?>">
	  </TD>
    </TR>
   	<tr> </tr> <tr> </tr>
	<tr> </tr> <tr> </tr>
  
  <TR>
    <TD>C Programming</TD>
    <TD><INPUT TYPE="TEXT" NAME="c" SIZE="1"  MAXLENGTH=3
	   value="<?php echo $c; ?>">	   
	</TD>
	
	<TD>Computer Organization</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="coa" SIZE="35" MAXLENGTH=35
	    value="<?php echo $coa; ?>">
	  </TD>
      </TR> 
     <tr> </tr> <tr> </tr>
	<tr> </tr> <tr> </tr>
  <TR>
    <TD>Discrete</TD>
    <TD><INPUT TYPE="TEXT" NAME="dm" SIZE="1" MAXLENGTH=3
	    value="<?php echo $dm; ?>">
	</TD>
   	<TD>Numerical Analysis</TD>
     <TD>
      <INPUT TYPE="TEXT" NAME="num" SIZE="40" MAXLENGTH=40
	   value="<?php echo $num; ?>">
	   </TD>
	   </TR>
     <tr> </tr> <tr> </tr>
	<tr> </tr> <tr> </tr>
	<TR>
    <TD>Accountancy</TD>
    <TD><INPUT TYPE="TEXT" NAME="acc" SIZE="1" MAXLENGTH=3
	   value="<?php echo $acc; ?>">
	</TD>
     <TD>C Lab</TD>
	 <TD><INPUT TYPE="TEXT" NAME="clab" SIZE="1" MAXLENGTH=3
	   value="<?php echo $clab; ?>">
	</TD>
	<TD>Bussiness Organization</TD>
	 <TD><INPUT TYPE="TEXT" NAME="bo" SIZE="1" MAXLENGTH=3
	   value="<?php echo $bo; ?>">
	</TD>
	
   </tr>
	<tr> </tr> <tr> </tr>
	<tr> </tr> <tr> </tr>
	<tr>
   <TD>Total Grade</TD>
    <TD><INPUT TYPE="TEXT" NAME="totalgrade" SIZE="1" MAXLENGTH=3
	    value="<?php echo $totalgrade; ?>" READONLY>
	</TD>

	 <TD>Remarks</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="remarks" SIZE="10" 
 	  value="<?php echo $remarks; ?>" READONLY>
	  </TD>
     </TR>
    </TABLE>
  <!-- End of the Table -->
  
<P><input type="submit" name="solve" value="Compute"> 
<input type="submit" name="clear" value=" Clear ">
<input type="submit" name="save" value=" Save  ">
</P>
</FORM>
</body>
</html>
