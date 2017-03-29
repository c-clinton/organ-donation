<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	//confirm_logged_in();
	
	if(isset($_POST['submit'])) {
		//echo works;
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$level = trim($_POST['lvllist']);
		if(empty($level)) { //checks if level is empty
		
		//echo "Level not selected.";
		
		$message = "Please select a user level.";
		
		}else{
			
			//echo "Level selected.";
			$result = createUser($fname, $lname, $username, $password, $level);
			$message = $result;
		}
	}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
</head>

<body>
<?php if(!empty($message)){echo $message;} ?>
<form action ="admin_createuser.php" method="post">
<label>First Name:</label>
<input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>">
<label>Last Name:</label>
<input name="lname" type="text" value="<?php if(!empty($lname)){echo $lname;} ?>">
<label>Username:</label>
<input name="username" type="text" value="<?php if(!empty($username)){echo $username;} ?>">
<label>Password</label>
<input name="password" type="text" value="<?php if(!empty($password)){echo $password;} ?>">

<br></br>

<select name="lvllist">
	<option value="">Please select User Level...</option>option>
    <option value="2">Web Admin</option>
    <option value="1">Web Master</option>
</select>
<br><br>
<input type="submit" name="submit" value="Create User">
</form>
<br><br>
<a href="admin_index.php">Back to Admin Panel</a>

</body>
</html>
