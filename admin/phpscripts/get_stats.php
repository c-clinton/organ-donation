<?php 

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	
	
	$mysqli->set_charset("utf8");

	$stats = $_GET["stats_id"];
	$statsquery = "SELECT * FROM tbl_infostats WHERE stats_id = $stats";
	$result = mysqli_query($mysqli, $statsquery);
	$row = mysqli_fetch_assoc($result);	
	echo json_encode($row);	
	
			
			
?>	