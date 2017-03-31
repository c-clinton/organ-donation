<?php 

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	
	
	$mysqli->set_charset("utf8");

	$infov = $_GET["vid_id"];
	$infovquery = "SELECT * FROM tbl_infovids WHERE vid_id = $infov";
	$result = mysqli_query($mysqli, $infovquery);
	$row = mysqli_fetch_assoc($result);	
	echo json_encode($row);	
	
			
			
?>	