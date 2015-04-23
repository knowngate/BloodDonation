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
				<li  class="current_page_item"><a href="index.html">Home</a></li>
				<li><a href="show.php">Show</a></li>
				<li><a href="delete.php">Delete</a></li>
				
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="header">
		<div id="logo" class="container">
			<h3>Welcome admin!</h3>
			<br><br><br><br>
			No. of Blood Donor Entries=
					
<?php

$link =mysql_connect('localhost', 'admin', 'admin') or die (mysql_error());
mysql_select_db('blood_search',$link) or die (mysql_error());

$result = mysql_query("SELECT * FROM members", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows\n";

?>
			<br><br><br><br>
			No. of Feedback=
			<?php

$link =mysql_connect('localhost', 'admin', 'admin') or die (mysql_error());
mysql_select_db('blood_search',$link) or die (mysql_error());

$result = mysql_query("SELECT * FROM feedback", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows\n";

?>
			
			
		</div>
	</div>
	<div id="page" class="container">
		<div id="content">
				
			</div>
		</div>
		<!-- end #content -->
		
		<!-- end #sidebar -->
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
