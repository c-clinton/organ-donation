<?php 

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	
	
	$mysqli->set_charset("utf8");

	$video = $_GET["vid_id"];
	$vidquery = "SELECT * FROM tbl_vids WHERE vid_id = $video";
	$result = mysqli_query($mysqli, $vidquery);
	$row = mysqli_fetch_assoc($result);	
	echo json_encode($row);	
	
			
			
?>	