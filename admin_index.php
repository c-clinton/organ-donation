<?php
	require_once("admin/phpscripts/init.php");
	confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Welcome to your Admin Panel</title>
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/app.css">
</head>
<body>

<div class="container">

	<section id="adminIndex" class="whitebox">
		<div id="phpGreeting">
	<span id="greeting">Welcome </span><span id="php"><?php echo $_SESSION['user_name']; ?>!</span><br>

    <p class="inline">The current date is: <?php $date = date('Y-m-d');	$time = time('h'); echo $date;?></p>

    <p class="inline"> Your last session was: <?php echo $_SESSION['user_lastlogin']; ?> </p>
</div>
    <h1>What would you like to do?</h1>

		<div id="adminButtons">
		<ul id="adminOptions">
		  <li><a class="linkhover" href="admin_createuser.php">Create User</a></li>
		    <li><a class="linkhover" href="admin_edituser.php">Edit User</a></li>
		  <li><a class="linkhover" href="admin/admin_edithome.php">Edit Home Text</a></li>
		  <li><a class="linkhover" href="admin/admin_editstats.php">Update Drive Stats</a></li>
			  <li><a class="linkhover" href="admin/admin_editfaqs.php">Add A FAQ</a></li>
				 <li><a class="linkhover" href="admin/admin_editdrives.php">Add A Donor Drive</a></li>
				  <li><a class="linkhover" href="admin/admin_addvideo.php">Update Videos</a></li>
		</ul>
		</div

   

   </section>

   </div>
   
    <div class="smallbut importantbut text-center logout"><a href="admin/phpscripts/caller.php?caller_id=logout">Log Out</a></div>

 <footer>
      <?php
        include('includes/footer.html');
        ?>
</footer>
 <script src="js/vendor/jquery.js"></script>
 <script src="js/vendor/foundation.min.js"></script>
 <script src="js/vendor/what-input.js"></script>
 <script src="js/fix.js"></script>
 <script src="js/date.js"></script>
</body>
</html>
