<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
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
<title>Edit Stats</title>
<link rel="stylesheet" href="../css/foundation.min.css">
<link rel="stylesheet" href="../css/app.css">
</head>


<body>

<h1>Edit Stats</h1>

<?php echo single_edit($tbl, $col, $id); ?>

<div class="text-center"><a href="../admin_index.php">Back</a></div>
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
