<?php

include("connect.php");
$count = 0;

$tbl = $_POST['tbl'];
$col = $_POST['col'];
$id = $_POST['id'];

unset($_POST['tbl']);
unset($_POST['col']);
unset($_POST['id']);

$num = count($_POST);

$qstring = "UPDATE {$tbl} SET ";

foreach($_POST as $label=>$value) {
	
	$count++;
	if($count != $num){
		$qstring .= $label." = '".$value."', "; 
	}else{
		
		$qstring .= $label." = '".$value."' "; 
	}
	
}

$qstring .= "WHERE {$col}={$id}";

echo $qstring;

$updateQuery = mysqli_query($link, $qstring);

if($updateQuery){
	
	header("Location: ../../index.html");
	
}else{
	
	echo "Update failed.";
	
}

mysqli_close($link);
?>