    <?php
    // Initialize session
    session_start();
    // Check, if username session is NOT set then this page will jump to login page
    if (!isset($_SESSION['username']))
    {
    header('Location: error.html');
    }
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Blood Search Engine</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />
<link href="other.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="secure_page.php">Home</a></li>
				<li  class="current_page_item"><a href="show.php">Show</a></li>
				<li><a href="delete.php">Delete</a></li>
				
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="header">
		<br><br>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<select name="search">
			<option value="1">Entries</option>
			<option value="2">Feedback</option>
		</select>
		<input type="submit" value="Submit">
		</form>
		<br><br>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{	
				if($_POST['search']==1)
				{
				$x=getEntries();
				}
				else if($_POST['search']==2)
				{
				$x=getFeedback();
				}
			}
		?>	
			
			<?php
function getFeedback()
{
$conn=mysql_connect('localhost', 'admin', 'admin');
if(! $conn)
{
  die (mysql_error());
}
mysql_select_db('blood_search') or die (mysql_error());

$abc = mysql_query("SELECT * FROM feedback ORDER BY id");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>email</th>
<th>Message</th>
</tr>";


while($row = mysql_fetch_array($abc,MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "</tr>";

 }
echo "</table>";
}
?>
			
			<?php
			function getEntries()
			{
$conn=mysql_connect('localhost', 'admin', 'admin');
if(! $conn)
{
  die (mysql_error());
}
mysql_select_db('blood_search') or die (mysql_error());

$abc = mysql_query("SELECT * FROM members ORDER BY id");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Code Name</th>
<th>Gender</th>
<th>Blood Group</th>
<th>Date of Birth</th>
<th>email</th>
<th>Address</th>
<th>City</th>
<th>Mobile</th>
<th>Landline</th>
</tr>";


while($row = mysql_fetch_array($abc,MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['code_name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['blood_group'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['landline'] . "</td>";
  echo "</tr>";

 }
echo "</table>";
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
