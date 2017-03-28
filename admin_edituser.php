<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	//confirm_logged_in();

    $id = $_SESSION['users_id'];
    //echo $id;
    //
    $popForm = getUser($id);
    //echo $popForm;
	

	
	if(isset($_POST['submit'])) {
		//echo works;
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		$result = editUser($fname, $lname, $username, $password);
		$message = $result;
		}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit User</title>
</head>

<h1>Edit User</h1>

<body>
<?php if(!empty($message)){echo $message;} ?>
<form action ="admin_edituser.php" method="post">
<label>First Name:</label>
<input type="text" name="fname" value="<?php echo $popForm['user_fname'];?>">
<label>Last Name:</label>
<input name="lname" type="text" value="<?php echo $popForm['user_lname'];?>">
<label>Username:</label>
<input name="username" type="text" value="<?php echo $popForm['user_name'];?>">
<label>Password</label>
<input name="password" type="text" value="<?php echo $popForm['user_pass'];?>">

<br><br>
<input type="submit" name="submit" value="Edit User">
</form>
<br><br>
<a href="admin_index.php">Back to Admin Panel</a>

</body>
</html>
