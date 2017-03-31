<?php

function single_edit($tbl, $col, $id){

$result = getSingle($tbl, $col, $id);
$getResult = mysqli_fetch_array($result);

echo "<form action=\"phpscripts/edit.php\" method=\"post\">"; 

echo "<input hidden name = \"tbl\" value=\"{$tbl}\">";

echo "<input hidden name = \"col\" value=\"{$col}\">";

echo "<input hidden name = \"id\" value=\"{$id}\">";

for($i=0; $i<mysqli_num_fields($result); $i++) { 
	
	$dataType = mysqli_fetch_field_direct($result,$i);
	$fieldName = $dataType->name;
	$fieldType = $dataType->type;
	if($fieldName !=$col){
		
		$name = str_replace('_', ' ', $fieldName);
	
	echo "<label class=\"text-center\">{$name}</label>";
	if($fieldType !=252){
		echo "<input type = \"text\" name =\"{$name}\" value = \"{$getResult[$i]}\"><br><br>";
	}else{
	
	echo "<textarea class=\"small-8 small-centered\" name=\"$name\">{$getResult[$i]}</textarea><br><br>";	
		
	}
		
	}
	}
	
	echo "<div class=\"text-center\"><input type=\"submit\" class=\"button importantbut submit\" value = \"Save Content\"></div>";

echo "</form>";
	
}

?>