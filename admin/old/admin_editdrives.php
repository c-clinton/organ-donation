<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	$tbl = 'tbl_driveslist';
	$catQuery = getAll($tbl); //this uses the function in read to get the movies from the database


	if(isset($_POST['submit'])) {
	/*	$fimg = $_FILES['movie_fimg']['name'];

		//echo $fimg;

		$thumb = "TH_".$fimg;

	$title = $_POST['movie_title'];
	$year= $_POST['movie_year'];
	$storyline = $_POST['movie_storyline'];
	$runtime = $_POST['movie_runtime'];
	$trailer = $_POST['movie_trailer'];
	$price = $_POST['movie_price'];
	$cat = $_POST['catlist'];
	*/

	$driveslist_img = $_POST['driveslist_img'];
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
<meta charset="UTF-8">
<title>Add Drives</title>
</head>
<body>
<h1>Add A Drive</h1>
<?php if(!empty($message)){echo $message;} ?>
<form action="admin_editdrives.php" method="post" enctype="multipart/form-data">
<label>Drive Image:</label><br>
<input type="text" name="driveslist_img" value="" size="32"><br><br>
<label>Drive Title:</label><br>
<input type="text" name="driveslist_title" value="" size="32"><br><br>
<label>Date Started:</label><br>
<input type="text" name="driveslist_datestarted" value="" size="32"><br><br>
<label>Total Clicks to Register:</label><br>
<input type="text" name="driveslist_clicksregister" value="" size="32"><br><br>
<label>Clicks This Month:</label><br>
<input type="text" name="driveslist_clicksmonth" value="" size="32"><br><br>

<input type="submit" name="submit" value="Add Drive">
</form>
<br>
<a href="../admin_index.php">Back</a>
</body>
</html>
