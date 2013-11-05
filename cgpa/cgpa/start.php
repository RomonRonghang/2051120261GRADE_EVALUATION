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
</head>

<body>
	<div id="mainwrapper">
		<div id="header">
		<img src="images/nitt.png" >
		</div>
		<div id="menu">
			<ul>
				<li> <a href="login1.php"> Administrator Login </a> </li>
				<li> <a href="login2.php"> Student Login </a> </li>
				<li> <a href="reg.php">Student Sign Up </a> </li>
				<div class="clearfix"></div>
			</ul>
		</div>
	<div id="main" style="padding:20px; text-align:justify; font-family:Times Roman;">
		<img src="images/main.png" align="center" style="height:auto; width:746px;">
		<br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Institute of Technology Trichy is one of the 30 National Institutes of Technology established by the Government of India. Today, NITT is an autonomous co-educational technological institute, with 10 undergraduate and 22 graduate programs. Undergraduate programs lead to the B.Tech and B.Arch degrees, while the graduate students and postgraduate students earn M.Tech, MCA, MSc, M.S. (by Research) and Ph. D degrees respectively. NITT also has a management and architecture school. NITT is located in Thuvakudi on the Trichy-Tanjore national highway, 17 km from Trichy Railway Junction.
		 <br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The National Institute of Technology (formerly known as Regional Engineering College) Tiruchirappalli, situated in the heart of Tamil Nadu on the banks of the river Cauvery, was started as a joint and co-operative venture of the Government of India and the Government of Tamil Nadu during 1964 with a view to catering to the needs of man-power in technology for the Country. The College has subsequently been conferred with autonomy in financial and administrative matters to achieve rapid development. Because of this rich experience, this institution was granted Deemed University Status with the approval of the University Grants Commission, the All India Council for Technical Education and the Govt. of India in the year 2003 and was renamed as National Institute of Technology. NITT was registered under the Societies Registration Act XXVII of 1975. 
		 <br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Chairman of NITT is Dr. Rajaram Nityananda (also Senior Professor, National Centre for Radio Astrophysics, Tata Institute of Fundamental Research) and the Director of NITT is Dr.Srinivasan Sundarrajan.
		</div>
		<div id="footer">
		</div>
		<div class="clearfix"></div>
	</div>
</body>
</html>
