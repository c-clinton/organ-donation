<?php
	require_once("admin/phpscripts/init.php");
	//confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your Admin Panel</title>
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/app.css">
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

<div class="container">

	<section id="adminIndex" class="whitebox">
		<div id="phpGreeting">
	<span id="greeting"></span><span id="php"><?php echo $_SESSION['user_name']; ?></span>

    <p class="inline">The current date is: <?php $date = date('Y-m-d');	$time = time('h'); echo $date;?></p>

    <p class="inline"> Your last session was: <?php echo $_SESSION['user_lastlogin']; ?> </p>
</div>
    <h1>What would you like to do?</h1>

<div id="adminButtons">
<ul id="adminOptions">
  <li><a class="link" href="admin_createuser.php">Create User</a></li>
    <li><a class="link" href="admin_edituser.php">Edit User</a></li>
  <li><a class="link" href="admin/admin_edithome.php">Edit Home Text</a></li>
  <li><a class="link" href="admin/admin_editstats.php">Update Drive Stats</a></li>
  <li><a class="link" href="admin/admin_editcontact.php">Update Contact Info</a></li>
</ul>
</div

    <div class="smallbut importantbut"><a href="admin/phpscripts/caller.php?caller_id=logout">Log Out</a></div>

   </section>

   </div>

<?php
include('includes/footer.html')
 ?>
 <script src="js/vendor/jquery.js"></script>
 <script src="js/vendor/foundation.min.js"></script>
 <script src="js/vendor/what-input.js"></script>
 <script src="js/app.js"></script>
 <script src="js/date.js"></script>
</body>
</html>
