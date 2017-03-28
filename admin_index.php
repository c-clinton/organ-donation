<?php
	require_once("admin/phpscripts/init.php");
	confirm_logged_in();
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

<div class="container">

	<section id="main" class="whitebox">
	<h1> <span id="greeting"></span><span id="php"><?php echo $_SESSION['user_name']; ?>.</span></h1> 
    
    <p>The current date is: <?php 
	
	$date = date('Y-m-d');
	
	$time = time('h');
	
	echo $date;
	
	
	?></p>
    
    <p> Your last session was:
	
	<?php 
	
	echo $_SESSION['user_lastlogin'];
	
	?>
    </p>
    
    <h1>What would you like to do?</h1>
    
    <p><a class="link" href="admin_createuser.php">Create User</a><p>
    
    
    <p><a class="link" href="admin_edituser.php">Edit User</a></p>
    
    <p><a class="link" href="admin/admin_edithome.php">Edit Home Text</a>
    <p><a class="link" href="admin/admin_editinfo.php">Update Info Stats</a>
    <p><a class="link" href="admin/admin_editstats.php">Update Drive Stats</a>
    <p><a class="link" href="admin/admin_editcontact.php">Update Contact Info</a>
    
    <div class="smallbut importantbut"><a href="admin/phpscripts/caller.php?caller_id=logout">Log Out</a></div>
    
   </section>
   
   </div>
 <script src="js/date.js"></script>   
</body>
</html>