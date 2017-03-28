<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	
	require_once("admin/phpscripts/init.php");
	
	$ip = $_SERVER["REMOTE_ADDR"];
	
	if(isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$enteredpass = trim($_POST['password']);
		if($username != "" && $enteredpass != "") {
			$result = logIn($username, $enteredpass, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields.";
		}
	}
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Client Login</title>
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/app.css">
</head>
<body>

<div class="container">

	<section class="whitebox">
	<h1>Content Management System Login</h1>
    <?php if(!empty($message)){echo $message;} ?>
	<form id="login" action="admin_login.php" method="post">
    	<label>Username:</label>
    	<input class="box" type="text" name="username" value="">
    	<label >Password:</label>
    	<input class="box" type="password" name="password" value="">
    	<input type="submit" class="importantbut" id="loginbut" name="submit" value="Login">
    </form>
    </section>
    
 </div>
</body>