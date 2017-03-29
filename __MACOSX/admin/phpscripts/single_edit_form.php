<?php

function single_edit($tbl, $col, $id){

$result = getSingle($tbl, $col, $id);
$getResult = mysqli_fetch_array($result); //this function allows one to edit whatever content in the database they want depending on what $tbl is.

echo "<form action=\"phpscripts/edit.php\" method=\"post\">"; 
echo "<input hidden name = \"tbl\" value=\"{$tbl}\">";
echo "<input hidden name = \"col\" value=\"{$col}\">";
echo "<input hidden name = \"id\" value=\"{$id}\">";
for($i=0; $i<mysqli_num_fields($result); $i++) { //for loop runs through the first array (no of table rows)
	
	$dataType = mysqli_fetch_field_direct($result,$i);
	$fieldName = $dataType->name;
	//echo $fieldName."<br>";
	$fieldType = $dataType->type; //shows the input type, allows us to change input based on the type listed in the db
	//echo $fieldType."<br>";
	if($fieldName !=$col){
	
	echo "<label>{$fieldName}</label>";	//would likely have to do a find and replace to replace underscores with spaces, but we won't worry bout it for now.
	if($fieldType !=252){
		echo "<input type = \"text\" name =\"{$fieldName}\" value = \"{$getResult[$i]}\"><br><br>";
	}else{
	
	echo "<textarea name=\"$fieldName\">{$getResult[$i]}</textarea><br><br>";	
		
	}
		
	}
	}
	
	echo "<input type=\"submit\" value = \"Save Content\">";

echo "</form>";
	
}

?>