<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	//confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	$tbl = "tbl_drivestats";
	$col = "drivestats_id";
	$id = 1;

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit All</title>
</head>

<body>

<h1>Edit All</h1>

<?php echo single_edit($tbl, $col, $id); ?>

<a href="../admin_index.php">Back</a>


</body>
</html>
