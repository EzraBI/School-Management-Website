<?php
if(isset($_REQUEST['name']) && isset($_REQUEST['email']) 
    && isset($_REQUEST['contact'])&& isset($_REQUEST['postal_address']) && isset($_REQUEST['message'])){
$REQUEST_name = $_REQUEST['name'];
$REQUEST_email = $_REQUEST['email'];
$REQUEST_contact = $_REQUEST['contact'];
$REQUEST_postal_address = $_REQUEST['postal_address'];
$REQUEST_message = $_REQUEST['message'];

$link = new mysqli('localhost','root','','brian');

if($link->connect_error)
    die('connection error: '.$link->connect_error);

$sql = "INSERT INTO DB_ONE(name, email,contact,postal_address,message) ;
VALUES('$REQUEST_name', '$REQUEST_email', '$REQUEST_contact','$REQUEST_postal_address' ,'$REQUEST_message)";

//echo $sql;    

$result = $link->query($sql); 

if($result){
    echo 'Your message has been sent successfully';
} 

$link->close();
die();

}
?>

<!doctype html>
<html>
<head>
<title>Nyaikuro High School |About us</title>
 <title style="color:blue;"></title> 
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="style.css">
</head>

<body>
<header>
	<div class="container">
	<div id="branding">
		<h1> <span class="highlight">DLOPPINGS</span><span class="highlight"> HIGH</span><span class="highlight"> SCHOOL</span></h1>
	</div>
	<nav>
	<li></li>
    <li><a href="homepage.html"> Home </a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="services.html">Services</a></li>
	<li class="current"><a href="contact us.php">Contact Us </a></li>
	<li><a href="register.php"> Register </a></li>
			</nav>
			</div>
		</header>
	 <div><br>
            <marquee bgcolor="#FF9900"><b>WELCOME TO DLOPPINGS HIGH SCHOOL..<b>we have qualified teachers,enough boarding facilities, good labaratories and condusive class rooms.</marquee>
            </div>
			
			<div class="row" id="contact us">
	<h2 style="text-align:center;color:DarkOrange;">CONTACT US:</h2>
	
	<div class="col-sm-5" >
	<address style="text-align:center">
<br><b>DLOPPINGS HIGH SCHOOL,<br/>P.O BOX 456-00100,<br> KISII.</br/>
</address><b>
<p style="text-align:center"><b>Email:<p1><a href="Dloppingshighschool@gmail.com oth.html">dloppingshighschool@gmail</a></p1><b>
<p style="text-align:center">Website:<p1><a href="nyaikurohighschool.html">www.dloppingshighschool.ac.ke</a></p1><br>
<p style="text-align:center">Tel. 02552003362</P>
<p style="text-align:center">or<br><b>Contact The Principal<br><br><b> +254704015371</p><hr/><br>
<p style="text-align:center;color:red"><i>NOTE:</i>You can only contact the school during the normal working days and hours!!!</i></p>
	</div>
            <style>

div#envelope{
width: 55%;
margin: 10px 30% 10px 25%;
padding:10px 0;
border: 2px solid gray;
border-radius:10px;
}
form{
width:70%;
margin:4% 15%;
}
header{
background-color: #4180C5;
text-align: center;
padding-top: 12px;
padding-bottom: 8px;
margin-top: -11px;
margin-bottom: -8px;
border-radius: 10px 10px 0 0;
color: aliceblue;
}

/* Makes responsive fields. Sets size and field alignment.*/
input[type=text]{
margin-bottom: 20px;
margin-top: 10px;
width:100%;
padding: 15px;
border-radius:5px;
border:1px solid #7ac9b7;
}
input[type=submit]
{
margin-bottom: 20px;
width:100%;
padding: 15px;
border-radius:5px;
border:1px solid #7ac9b7;
background-color: #4180C5;
color: aliceblue;
font-size:15px;
cursor:pointer;
}
#submit:hover
{
background-color: black;
}
textarea{
width:100%;
padding: 15px;
margin-top: 10px;
border:1px solid #7ac9b7;
border-radius:5px;
margin-bottom: 20px;
resize:none;
}
input[type=text]:focus,textarea:focus {
border-color: #4697e4;
}
<br><br>
</style>
</head>
<body>
<div id="envelope">
<form action="contact us.php" method="POST">
<header>
<h2>CONTACT US FORM</h2><br/>
</header>
<label> Name</label>
<input name="name" placeholder="Brian Abuga" type="text" width="100px;" required
<label>Email </label>
<input name="email" placeholder="yourname@gmail.com" type="text" required>
<label>Contact Number</label>
<input name="contact" placeholder="123456789" type="text">
<label>Postal Address</label>
<input name="postal_address" placeholder="P.O BOX 1156-40200 kenya" type="text" required>
<label>Message</label>
<textarea cols="15" name="message" placeholder="Message" rows="10" required>
</textarea>
<input id="submit" type="submit" value="Send Message">
</form>
</div>
       
			
<h3 style="color:blue">Connect With US<h3>

<a href="https://www.facebook.com/" target="_blank"><img src="http://niftybuttons.com/rkc-social-set-1/facebook.png" align="center" border="2" style="margin:20px;"></a><a href="https://twitter.com/" target="_blank"><img src="http://niftybuttons.com/rkc-social-set-1/twitter.png" border="2" style="margin:20px;" align="center"></a><a href=" https://plus.google.com/u/0/" target="_blank"><img src="http://niftybuttons.com/rkc-social-set-1/gplus.png" border="2" style="margin:20px;" align="center"></a><a href=" https://mail.google.com/mail/u/0/#inbox" target="_blank"><img src="http://niftybuttons.com/rkc-social-set-1/email.png" border="2" style="margin:20px;" align="center"></a>
		<footer>
			<p>Dloppings High School, copyright &copy All Rights Reserved. 2017</p>
			
		</footer>
	</body>
</html>
