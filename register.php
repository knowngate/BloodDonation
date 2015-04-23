<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Register Now!</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />
<link href="other.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
// define variables and set to empty values
$x= $y= $nameErr = $cnameErr = $dobErr= $emailErr = $sexErr = $mobErr = $addErr = $cityErr = "";
$name = $cname = $dob= $email = $sex = $mob = $add = $city = $bd = $landline="";
$count=0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   if (empty($_POST["name"]))
     {$nameErr = "Name is required";}
   else
     {$name = test_input($_POST["name"]);
	 if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed"; 
       }
	
	 }
   
   if (empty($_POST["code_name"]))
     {$cnameErr = "Code name is required is required";
	 }
   else
     {$cname = test_input($_POST["code_name"]);
	
	 }
   
   if (empty($_POST["dob"]))
     {$dobErr = "Date of Birth is required is required";}
   else
     {
		$dob = test_input($_POST["dob"]);
	}
   
   if (empty($_POST["sex"]))
     {$sexErr = "Gender is required";}
   else
     {$sex = test_input($_POST["sex"]);
	  
	 }
	
	if (empty($_POST["mobile"]))
     {$mobErr = "Mobile number is required is required";}
   else
     {$mob = test_input($_POST["mobile"]);
	  
	 }
   
   if (empty($_POST["add"]))
     {$addErr = "Adress is required is required";}
   else
     {$add = test_input($_POST["add"]);
	  
	 }
	
	if (empty($_POST["city"]))
     {$cityErr = "City is required is required";}
   else
     {$city = test_input($_POST["city"]);
	  
	 }
	
	if (empty($_POST["BD"]))
	{
	$bd = "";
	}
	else
	{
	$bd=test_input($_POST["BD"]);
	}
	
	if (empty($_POST["landline"]))
	{
	$landline = "";
	}
	else
	{
	$landline = test_input($_POST["landline"]);
	}
	
	if (empty($_POST["email"]))
	{
	$email = "";
	}
	else
	{
	$email = test_input($_POST["email"]);
	}
  
	$x=send_data($name,$cname,$dob,$email,$sex,$mob,$add,$city,$bd,$landline);
  }

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}



?>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li ><a href="index.html">Home</a></li>
				<li><a href="find.php">Find</a></li>
				<li  class="current_page_item"><a href="register.php">Register</a></li>
				<li ><a href="photo.html">Photos</a></li>
				<li><a href="faq.html">FAQ</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="signin.php">Sign in</a></li>
			</ul>
		</div>
	</div>
	<div id="header">
		<div id="logo" class="container">
			<h2>Register Now!</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 <fieldset>
  <legend>Personal Information:</legend>

Name:<span class="error">* <?php echo $nameErr;?></span><br><input type="text" name="name"><br>
Code name:<span class="error">* <?php echo $cnameErr;?></span><br><input type="text" name="code_name"><br>
Date of Birth:<span class="error">* <?php echo $dobErr;?></span><br><input type="text" name="dob">(YYYY/MM/DD)<br>
Gender:<span class="error">* <?php echo $sexErr;?></span><br>
<input type="radio" name="sex" value="male">Male
<input type="radio" name="sex" value="female">Female<br>
Blood Group:*
<select name="BD">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
   <option value="O+">O+</option>
  <option value="O-">O-</option>
   <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select>
<br>
</fieldset>



<fieldset>
  <legend>Contact:</legend>
mobile:<span class="error">* <?php echo $mobErr;?></span><br><input type="text" name="mobile"><br>
landline:<br><input type="text" name="landline"><br>
  email id:<br><input type="text" name="email"><br>
Address:<span class="error">* <?php echo $addErr;?></span>
<br>
<textarea name="add" value="" rows="4" cols="50">
</textarea>
<br>
CITY:<span class="error">* <?php echo $cityErr;?></span><br>
<select name="city">
<option value="Akola">Akola</option>
<option value="Amravati">Amravati</option>
<option value="Buldhana">Buldhana</option>
<option value="Yavatmal">Yavatmal</option>
<option value="Washim">Washim</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Beed">Beed</option>
<option value="Hingoli">Hingoli</option>
<option value="Jalna">Jalna</option>
<option value="Latur">Latur</option>
<option value="Nanded">Nanded</option>
<option value="Osmanabad">Osmanabad</option>
<option value="Parbhani">Parbhani</option>
<option value="Mumbai">Mumbai</option>
<option value="Thane">Thane</option>
<option value="Raigad">Raigad</option>
<option value="Ratnagiri">Ratnagiri</option>
<option value="Sindhudurg">Sindhudurg</option>

<option value="Nagpur">Nagpur</option>
<option value="Bhandara">Bhandara</option>
<option value="Gondia">Gondia</option>
<option value="Chandrapur">Chandrapur</option>
<option value="Gadchiroli">Gadchiroli</option>
<option value="Wardha">Wardha</option>
  
<option value="Ahmednagar">Ahmednagar</option>
<option value="Nandurbar">Nandurbar</option>  
  <option value="Dhule">Dhule</option>  
  <option value="Nashik">Nashik</option>
  <option value="Jalgaon">Jalgaon</option>
  
  <option value="Kolhapur">Kolhapur</option>
  <option value="Solapur">Solapur</option>
  <option value="Pune">Pune</option>
  <option value="Sangli">Sangli</option>
  <option value="Satara">Satara</option> 
  
</select>
<br>
</fieldset>
<input type="submit" value="Submit">

<span class="thank"><?php echo $x;?></span>
</form>
<?php
function send_data($name,$cname,$dob,$email,$sex,$mob,$add,$city,$bd,$landline)
{
	mysql_connect('localhost', 'admin', 'admin') or die (mysql_error());
mysql_select_db('blood_search') or die (mysql_error());

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($name!=NULL and $cname!=NULL and $dob!=NULL and $sex!=NULL and $mob!=NULL and $add!=NULL and $city!=NULL and $bd!=NULL)
{
mysql_query("INSERT INTO members (name,code_name,gender,blood_group,dob,email,address,city,mobile,landline)
VALUES
('$name','$cname','$sex','$bd','$dob','$email','$add','$city','$mob','$landline')");


 return "THANK YOU!!!";
}
 }
?>		
			
			
			
		</div>
	</div>
	<div id="page" class="container">
		
		<!-- end #content -->
		
	</div>
	<!-- end #page -->
	
</div>
<div id="footer-content" class="container">
	<div id="footer-bg">
		<div id="column1">
			<h2></h2>
			<p>Copyright by KITCOEK</p>
			<p>Developed by CSE dept</p>
			<p>All rights reserved</p>
		</div>
		
		<div id="column4">
			<h2>Social</h2>
			<ul class="list-style3">
				<li class="first"><a href="http://www.twitter.com">Twitter</a></li>
				<li><a href="http://www.facebook.com">Facebook</a></li>
				<li><a href="http://www.google.com">Google +</a></li>
				
			</ul>
		</div>
	</div>
</div>
<!-- end #footer -->
</body>
</html>
