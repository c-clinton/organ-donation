<?php 

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	
	
	$mysqli->set_charset("utf8");

	$home = $_GET["home_id"];
	$homequery = "SELECT * FROM tbl_home WHERE home_id = $home";
	$result = mysqli_query($mysqli, $homequery);
	$row = mysqli_fetch_assoc($result);	
	echo json_encode($row);	
	
			
			
?>	