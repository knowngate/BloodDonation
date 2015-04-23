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
				<li><a href="show.php">Show</a></li>
				<li  class="current_page_item"><a href="delete.php">Delete</a></li>
				
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="header">
		<?php
		
		$idErr="";

		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
					$id=$_POST['id'];
		if (empty($_POST["id"]))
		{
		$idErr = "id is required";}
		else{
		
			$conn=mysql_connect('localhost', 'admin', 'admin');
			if(! $conn)
			{
				die (mysql_error());
			}
			mysql_select_db('blood_search') or die (mysql_error());

			$abc = mysql_query("SELECT * FROM members WHERE id='$id'",$conn);
			if($abc==false)
			{
			$idErr = "id does not exist";}
			
			else
			{
				mysql_query("DELETE FROM members WHERE id='$id'");
				$idErr= "id DeleteD!";
			}
		}
		}
		?>
		<br><br>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<br>Deletes blood entry record:<br>
		<br>Enter ID:<input type="text" name="id"><br>
		<span class="error"><?php echo $idErr;?></span><br>

		<input type="submit" value="Submit">
		</form>
		<br><br>
		

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
