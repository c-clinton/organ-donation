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
			$message = "<p style='color:red; text-align: center;'>*Please Fill Out All Required Fields*</p>";
		}
	}


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css" media="screen" type="text/css">
  </head>
<body>

<?php
	include('includes/nav.html')
?>

<section class="ban">

<div class="row">
<h2 class="show-for-medium medium-9 columns"><strong>1 Organ Donor Can Save 8 Lives.</strong> <br> It only takes 2 minutes for you to register.</h2>
<div id="regbut" class="show-for-medium medium-3 columns"><a href="#"><h4 class="text-center">Register or Check Now</h4></a></div>
</div>

</section>

<div class="container" id="adminLogin">

	<section class="whitebox" id="loginSection">
	<h1>Content Management System Login</h1>
    <?php if(!empty($message)){echo $message;} ?>
	<form id="login" action="admin_login.php" method="post">
    	<label>Username:</label>
    	<input class="box" type="text" name="username" value="" placeholder="Enter Your Username">
    	<label >Password:</label>
    	<input class="box" type="password" name="password" value="" placeholder="Enter Your Password">
    	<input type="submit" class="importantbut submit" id="loginbut" name="submit" value="LOGIN">
    </form>
    </section>

 </div>

 <?php
 	include('includes/footer.html')
 ?>



 <script src="js/vendor/jquery.js"></script>
 <script src="js/vendor/foundation.min.js"></script>
 <script src="js/vendor/what-input.js"></script>
 <script src="js/app.js"></script>
</body>
