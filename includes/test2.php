<?php

	$tbl = "tbl_text";
	$col = "text_id";
	$id = 2;

echo "<form action=\"phpscripts/edit.php\" method=\"post\">"; 
echo "<input hidden name = \"tbl\" value=\"{$tbl}\">";
echo "<input hidden name = \"col\" value=\"{$col}\">";
echo "<input hidden name = \"id\" value=\"{$id}\">";

echo "<textarea>"; 

echo single_edit($col); 

echo "</textarea>"; 

	echo "<input type=\"submit\" value = \"Save Content\">";

echo "</form>";

?>