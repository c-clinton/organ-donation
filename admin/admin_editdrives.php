<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
		confirm_logged_in();

	$tbl = 'tbl_driveslist';
	$catQuery = getAll($tbl);


	if(isset($_POST['submit'])) {

	$driveslist_img = $_FILES['driveslist_img']['name'];

	$driveslist_title = $_POST['driveslist_title'];
	$driveslist_datestarted = $_POST['driveslist_datestarted'];
	$driveslist_clicksregister = $_POST['driveslist_clicksregister'];
	$driveslist_clicksmonth = $_POST['driveslist_clicksmonth'];


	$uploadDrives = addDrive($driveslist_img, $driveslist_title, $driveslist_datestarted, $driveslist_clicksregister, $driveslist_clicksmonth);
	$message = $uploadDrives;
	}
?>

<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add A Drive</title>
	<link rel="stylesheet" href="../css/foundation.min.css">
	<link rel="stylesheet" href="../css/app.css">
</head>
<body>


	<div id="editDrives">
<h1>Add A Donor Drive:</h1><br>
<?php if(!empty($message)){echo $message;} ?>
<form action="admin_editdrives.php" method="post" enctype="multipart/form-data">
<label>Drive Image:</label>
<input type="file" name="driveslist_img" value="" size="32"><br>
<label>Drive Title:</label>
<input type="text" name="driveslist_title" value="" size="32"><br>
<label>Date Started:</label>
<input type="text" name="driveslist_datestarted" value="" size="32"><br>
<label>Total Clicks to Register:</label>
<input type="text" name="driveslist_clicksregister" value="" size="32"><br>
<label>Clicks This Month:</label>
<input type="text" name="driveslist_clicksmonth" value="" size="32"><br>

<input class="button importantbut submit" type="submit" name="submit" value="ADD DRIVE">
</form>
<br>
<a href="../admin_index.php">Back</a>
<br>
</div>

 <footer>
      <?php
        include('../includes/footer.html');
        ?>
</footer>
 <script src="../js/vendor/jquery.js"></script>
 <script src="../js/vendor/foundation.min.js"></script>
 <script src="../js/vendor/what-input.js"></script>
 <script src="../js/fix.js"></script>

</body>
</html>
