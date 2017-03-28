<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("admin/phpscripts/init.php");
	//confirm_logged_in();
	
	if(isset($_POST['submit'])) {
		//echo works;
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$level = trim($_POST['lvllist']);
		if(empty($level)) { //checks if level is empty
		
		//echo "Level not selected.";
		
		$message = "Please select a user level.";
		
		}else{
			
			//echo "Level selected.";
			$result = createUser($fname, $lname, $username, $email, $level);
			$message = $result;
		}
	}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/app.css">
</head>

<body>

<div class="container">

<section class="whitebox">

<h1>Create User</h1>

<div class="formsection">

<h2 class="hidden">Please fill out the fields below.</h2>

<?php if(!empty($message)){echo $message;} ?>


<form action ="admin_createuser.php" method="post">

<div class="stack">

<label>First Name:</label>
<input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>">
<label>Last Name:</label>
<input name="lname" type="text" value="<?php if(!empty($lname)){echo $lname;} ?>">

</div>

<div class="stack">
<label>Username:</label>
<input name="username" type="text" value="<?php if(!empty($username)){echo $username;} ?>">
<label>Email:</label>
<input name="email" type="text" value="<?php if(!empty($email)){echo $email;} ?>">
</div>

<div class="center">
<select name="lvllist">
	<option value="">Please select User Level...</option>option>
    <option value="2">Web Admin</option>
    <option value="1">Web Master</option>
</select>

</div>
</div>

<input class="stack importantbut" type="submit" name="submit" value="Create User">
</form>


<a class="stack centertext link" href="admin_index.php">Back to Admin Panel</a>

</section>

</div>

</body>
</html>
