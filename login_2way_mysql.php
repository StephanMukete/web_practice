<?php
// process the script only if the form has been submitted
if (array_key_exists('login', $_POST)) {
  // start the session
  session_start();
  //include('/opt/lampp/htdocs/phpsolutions/includes/corefuncs.php');
  include('/opt/lampp/htdocs/phpsolutions/includes/conn_mysql.inc.php');
  // clean the $_POST array and assign to shorter variables
//  nukeMagicQuotes();
  $username = trim($_POST['username']);
  $pwd = trim($_POST['pwd']);
  // connect to the database as a restricted user
  $conn = dbConnect('query');
  // prepare username for use in SQL query
  $username = mysql_real_escape_string($username);
  // create key
  $key = 'takeThisWith@PinchOfSalt';
  $sql = "SELECT * FROM users_2way
          WHERE username = '$username'
		  AND pwd = ENCODE('$pwd', '$key')";
  $result = mysql_query($sql);
  $numRows = mysql_num_rows($result);
  if ($numRows) {
    $_SESSION['authenticated'] = 'Jethro Tull';
	}
  // if no match, destroy the session and prepare error message
  else {
    $_SESSION = array();
	session_destroy();
	$error = 'Invalid username or password';
	}
  // if the session variable has been set, redirect
  if (isset($_SESSION['authenticated'])) {
	// get the time the session started
	$_SESSION['start'] = time();
	header('Location: http://localhost/phpsolutions/authenticate/menu03.php');
	exit;
	}
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>

<body>
<?php
if (isset($error)) {
  echo "<p>$error</p>";
  }
elseif (isset($_GET['expired'])) {
?>
  <p>Your session has expired. Please log in again.</p>
<?php } ?>
<form id="form1" name="form1" method="post" action="">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" />
    </p>
    <p>
        <label for="textfield">Password</label>
        <input type="password" name="pwd" id="pwd" />
    </p>
    <p>
        <input name="login" type="submit" id="login" value="Log in" />
    </p>
</form>
</body>
</html>
