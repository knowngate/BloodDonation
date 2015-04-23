    <?php
    session_start();
    $login=0;
	if($_POST['uname']=="admin" and $_POST['pword']=="admin")
    {
	$login =1;
	}
    // Check username and password match
    if ($login == 1)
    {
    // Set username session variable
    $_SESSION['username'] = $_POST['uname'];
    // Jump to secured page
    header('Location: secure_page.php');
    }
    else
    {
    // Jump to login page
    header('Location: error.html');
    }
    ?>