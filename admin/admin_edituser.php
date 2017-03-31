<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("admin/phpscripts/init.php");
	confirm_logged_in();

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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Edit User</title>
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/app.css">
</head>

<body>


<div class="container">

<section class="whitebox" id="adminEditUser">

<h1>Edit User</h1>

<div class="formsection">

<h2 class="hidden">Please fill out the fields below.</h2>

<?php if(!empty($message)){echo $message;} ?>


<form action ="admin_edituser.php" method="post" id="adminEdit">

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
</div>

<input class="stack importantbut submit" type="submit" name="submit" value="Edit User">
</div>
</form>


<div class="text-center"><a class="stack centertext link linkhover" href="admin_index.php">Back to Admin Panel</a></div>

</section>

</div>

 <footer>
      <?php
        include('includes/footer.html');
        ?>
</footer>


     <script src="js/vendor/jquery.js"></script>
     <script src="js/vendor/foundation.min.js"></script>
     <script src="js/vendor/what-input.js"></script>
     <script src="js/fix.js"></script>
</body>
</html>
