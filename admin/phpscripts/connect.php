<?php
	$user = "cjcli271_test";
	$pass = ")1%J~2b6Q4U*";
	$url = "cjclinton.ca";
	$db = "cjcli271_beadonor";

	
	$link = mysqli_connect($url, $user, $pass, $db);

	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
