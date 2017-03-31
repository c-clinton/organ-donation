<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	$tbl = 'tbl_infofaq';
	$catQuery = getAll($tbl); //this uses the function in read to get the movies from the database


	if(isset($_POST['submit'])) {
	/*	$fimg = $_FILES['movie_fimg']['name'];

		//echo $fimg;

		$thumb = "TH_".$fimg;

	$title = $_POST['movie_title'];
	$year= $_POST['movie_year'];
	$storyline = $_POST['movie_storyline'];
	$runtime = $_POST['movie_runtime'];
	$trailer = $_POST['movie_trailer'];
	$price = $_POST['movie_price'];
	$cat = $_POST['catlist'];
	*/

	$title = $_POST['infofaq_question'];
	$answer = $_POST['infofaq_answer'];


	$uploadFaq = addFaq($title,$answer);
	$message = $uploadFaq;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add FAQ's</title>
</head>
<body>
<h1>Add A FAQ</h1>
<?php if(!empty($message)){echo $message;} ?>
<form action="admin_editfaqs.php" method="post" enctype="multipart/form-data"> <!--looks for multi part files like movies and shit-->
<!--<label>Front Image:</label><br>
<input type="file" name="movie_fimg" value="" size="32"><br><br>-->
<label>New Question:</label><br>
<input type="text" name="infofaq_question" value="" size="32"><br><br>
<label>New Answer:</label><br>
<input type="text" name="infofaq_answer" value="" size="32"><br><br>

<input type="submit" name="submit" value="Add FAQ">
</form>
<br>
<a href="../admin_index.php">Back</a>
</body>
</html>
