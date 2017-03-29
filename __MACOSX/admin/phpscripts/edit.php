<?php

include("connect.php");
$count = 0;

$tbl = $_POST['tbl'];
$col = $_POST['col'];
$id = $_POST['id'];

unset($_POST['tbl']);
unset($_POST['col']);
unset($_POST['id']); //removes table, column, and id from posted content, to prevent additional items from being edited.

$num = count($_POST);

$qstring = "UPDATE {$tbl} SET "; //always remember to add space after SET to avoid names being fucked up

foreach($_POST as $label=>$value) {
	
	$count++;
	if($count != $num){
		$qstring .= $label." = '".$value."', ";  // .= is the same as ++ in JS
	}else{
		
		$qstring .= $label." = '".$value."' "; 
	}
	
}

$qstring .= "WHERE {$col}={$id}"; //no quotes around {$integers}

echo $qstring;

$updateQuery = mysqli_query($link, $qstring);

if($updateQuery){
	
	header("Location: ../../index.html");
	
}else{
	
	echo "Update failed.";
	
}

mysqli_close($link);
?>