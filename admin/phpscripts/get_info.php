<?php 

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	
	
	$mysqli->set_charset("utf8");

	$info = $_GET["info_id"];
	$infoquery = "SELECT * FROM tbl_info WHERE info_id = $info";
	$result = mysqli_query($mysqli, $infoquery);
	$row = mysqli_fetch_assoc($result);	
	echo json_encode($row);	
	
			
			
?>	