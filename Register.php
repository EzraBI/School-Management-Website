<?php
if(isset($_POST['first_name']) && isset($_POST['last_name']) 
    && isset($_POST['county']) && isset($_POST['parent_email']) 
    && isset($_POST['parent_name']) && isset($_POST['parent_phone_number'])
	&& isset($_POST['date_of_birth']) && isset($_POST['index_no'])
	&& isset($_POST['primary_school'])&& isset($_POST['kcpe_marks'])&& isset($_POST['gender'])){
$REQUEST_first_name = $_REQUEST['first_name'];
$REQUEST_last_name = $_REQUEST['last_name'];
$REQUEST_county = $_REQUEST['county'];
$REQUEST_parent_email = $_REQUEST['parent_email'];
$REQUEST_parent_name = $_REQUEST['parent_name'];
$REQUEST_parent_phone_number= $_REQUEST['parent_phone_number'];
$REQUEST_date_of_birth= $_REQUEST['date_of_birth'];
$REQUEST_index_number= $_REQUEST['index_no'];
$REQUEST_primary_school= $_REQUEST['primary_school'];
$REQUEST_kcpe_marks= $_REQUEST['kcpe_marks'];
$REQUEST_gender= $_REQUEST['gender'];

$link = new mysqli('localhost','root','','brian');

if($link->connect_error)
    die('connection error: '.$link->connect_error);

$sql = "INSERT INTO dloppings(first_name, last_name,county,parent_email,parent_name,parent_phone_number,date_of_birth,index_no,primary_school,kcpe_marks,gender) 
VALUES('$REQUEST_first_name', '$REQUEST_last_name', '$REQUEST_county',
'$REQUEST_parent_email','$REQUEST_parent_name','$REQUEST_parent_phone_number' ,'$REQUEST_date_of_birth',
'$REQUEST_index_number','$REQUEST_primary_school','$REQUEST_kcpe_marks','$REQUEST_gender')";

//echo $sql;    

$result = $link->query($sql); 

if($result){
    echo 'You have been Successfully registered';
}else{
    echo 'Unable to register';
} 

$link->close();
die();

}
?>

<!doctype html>
<html>
<head>
<title>Dloppings High school/Welcome</title>
 <title style= "color:blue;"></title> 
<link rel="stylesheet" href="./css/style.css">}
</head>

<body>
<header>
	<div class="container">
	<div id="branding">
		<h1><span class="highlight">DLOPPINGS</span><span class="highlight"> HIGH</span><span class="highlight"> SCHOOL</span></h1>
	</div>
	<nav>
	<ul>
	<li><a href="homepage.html"> Home </a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="sevices.html">Services</a></li>
	<li><a href="contact us.php">Contact Us </a></li>
	<li class="current"><a href="register.php"> Register </a></li>
	  </ul>
	  </nav>
  </div>
</header>
<body><br>

<div>
            <marquee bgcolor="#FF9900"><b>WELCOME TO DLOPPINGS HIGH SCHOOL..<b>Register to our school and enjoy learning in our cool and condusive environment.</marquee>
            </div>
			<marquee bgcolor="green">
			<img src="img/39.jpg" alt="" width="400" height="200" longdesc="img/39.jpg" />
			<img src="img/39.jpg" alt="" width="400" height="200" longdesc="img/39.jpg" />
			<img src="img/39.jpg" alt="" width="400" height="200" longdesc="img/39.jpg" />
			<img src="img/39.jpg" alt="" width="400" height="200" longdesc="img/39.jpg" />
			</marquee>
 
	<h2  align="center" style="color:YellowGreen ">Registration Form</h2>
	<form action="" method="post" style="text-align:center; color:green">
			<fieldset>
		<div>
		 <label>First Name</label>
		 <input type="text" name="first_name"  required ><br><br>
		 </div>
		 
		 <div>
		 <label>Last Name</label>
		 <input type="text" name="last_name" required><br><br>
		 </div>
		 
		 <div>
		 <label>County</label>
		 <input type="text" name="county"  required><br><br>
		 </div>
		 
		 <div>
		 <label>Parent Email</label>
		 <input type="email" name="parent_email" required><br><br>
		 </div>
		 <div>
		 <label>Parent Name</label>
		 <input type="text" name="parent_name" required><br><br>
		 </div>
		 <div>
		 <label>Parent Phone No.</label>
		 <input type="text" name="parent_phone_number"  required><br><br>
		 </div>
		 <div>
		 <label>Date Of Birth</label>
		 <input type="text" name="date_of_birth"  required><br><br>
		 </div>
		 <div>
		 <label>Index No</label>
		 <input type="text" name="index_no"  required><br><br>
		 </div>
		 <div>
		 <label>Primary School</label>
		 <input type="text" name="primary_school"  required><br><br>
		 </div>
		 <div>
		 <label>K.C.P.E Marks</label>
		 <input type="text" name="kcpe_marks"  required><br><br>
		 </div>
		 <label>Gender</label>
		 <input type="radio" name="gender" value="male" required > Male
		 <input type="radio" name="gender" value="female" required > Female
		
		 <div>
		 <button type="submit" name="register" id="btn">Register</button>
		 </div>
		 </form>
		 </fieldset>
		 
		  <section id="newsletter">
			<div  class="container">
			<h1>Subscribe To Our Newsletter</h1>
			<form>
			<input type="email" placeholder="Enter Your Email...">
			<button type="submit" class="button_1">Subscribe</button>
				</form>
			</div>
		</section>
		
		
            <h3 style="color:white">Connect With US<h3>

<a href="httarget="_blank"><img src="http://niftybuttons.com/rkc-social-set-1/twitter.png" border="2" style="margin:20px;" align="center"></a><a href=" https://plus.google.com/u/0/" target="_blank"><img src="http://niftybuttons.com/rkc-social-set-1/gplus.png" border="2" style="margin:20px;" align="center"></a><a href=" https://mail.google.com/mail/u/0/#inbox" target="_blank"><img src="http://niftybuttons.com/rkc-social-set-1/email.png" border="2" style="margin:20px;" align="center"></a>

 <br/><br/>
 
 <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5970bab2e09da642"></script> 
       
 
		<footer>
			<p>Dloppings High School, copyright &copy All Rights Reserved. 2017</p>
			
		</footer>
		</body>
		</html>