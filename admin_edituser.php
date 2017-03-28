<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("admin/phpscripts/init.php");
	//confirm_logged_in();

    $id = $_SESSION['user_id'];
    $populate = getUser($id);
	

	
	if(isset($_POST['submit'])) {
		//echo works;
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		$result = editUser($fname, $lname, $username, $email, $password, $id);
		$message = $result;
		}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit User</title>
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/app.css">
</head>

<body>

<div class="container">

<section class="whitebox">

<h1>Edit User</h1>

<div class="formsection">

<h2 class="hidden">Please fill out the fields below.</h2>

<?php if(!empty($message)){echo $message;} ?>


<form action ="admin_edituser.php" method="post">

<div class="stack">

<label>First Name:</label>
<input type="text" name="fname" value="<?php echo $populate['user_fname'];?>">
<label>Last Name:</label>
<input name="lname" type="text" value="<?php echo $populate['user_lname'];?>">

</div>

<div class="stack">
<label>Username:</label>
<input name="username" type="text" value="<?php echo $populate['user_name'];?>">
<label>Email:</label>
<input name="email" type="text" value="<?php echo $populate['user_email'];?>">
</div>

<div class="stack">
<label>Password:</label>
<input name="password" type="text" value="<?php echo $populate['user_hash'];?>">

<!--I'd probably have to write a function that would decode encrypted passwords from the salt + hash then re-encrypt the NEW password like I attempted with the login function, but I'll keep this simple for now.-->
</div>
</div>

<input class="stack importantbut" type="submit" name="submit" value="Edit User">
</form>


<a class="stack centertext link" href="admin_index.php">Back to Admin Panel</a>

</section>

</div>

</body>
</html>
