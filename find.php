<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Find a donor</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />
<link href="other.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php

?>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li  class="current_page_item"><a href="find.php">Find</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="photo.html">Photos</a></li>
				<li><a href="faq.html">FAQ</a></li>				
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="signin.php">Sign in</a></li>
			</ul>
		</div>
	</div>
	<div id="header">
		
			<h1><a href="find.php">Find a donor</a></h1>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<fieldset>
			<legend>Enter Information</legend>
			Blood Group:
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
CITY:
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
			</form>
			
	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$conn=mysql_connect('localhost', 'admin', 'admin');
if(! $conn)
{
  die (mysql_error());
}
mysql_select_db('blood_search') or die (mysql_error());

$cityp="$_POST[city]";
$blod="$_POST[BD]";



$abc = mysql_query("SELECT code_name,mobile,landline,city FROM members WHERE blood_group='$blod' AND city='$cityp'",$conn);
if($abc)
{
	echo "<table border='1'>
<tr>
<th>Code Name</th>
<th>Mobile</th>
<th>Landline</th>
<th>City</th>
</tr>";


while($row = mysql_fetch_array($abc,MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>" . $row['code_name'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['landline'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "</tr>";

 }
echo "</table>";
}

else
{
	echo "not found";
}
mysql_close($conn);
}
?>		
			
			
	</div>
	<div id="page" class="container">
		<div id="content">
				
			</div>
		</div>
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
