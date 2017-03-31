<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
		confirm_logged_in();

	$tbl = 'tbl_infofaq';
	$catQuery = getAll($tbl);

	if(isset($_POST['submit'])) {
	$title = $_POST['infofaq_question'];
	$answer = $_POST['infofaq_answer'];


	$uploadFaq = addFaq($title,$answer);
	$message = $uploadFaq;
	}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add FAQ's</title>
<link rel="stylesheet" href="../css/foundation.min.css">
<link rel="stylesheet" href="../css/app.css">
</head>
<body>



<div id="editFAQS">
<h1>Add A FAQ</h1><br>

<?php if(!empty($message)){echo $message;} ?>
<form action="admin_editfaqs.php" method="post" enctype="multipart/form-data" id="faqsForm">
<label>New Question:</label>
<input type="text" name="infofaq_question" value="" size="32">
<label>New Answer:</label>
<input type="text" name="infofaq_answer" value="" size="32"><br>
<input class="button importantbut submit" type="submit" name="submit" value="ADD">
</form>

<br>
<div class="text-center" id="push"><a href="../admin_index.php">Back</a></div>
</div>

 <footer>
      <?php
        include('../includes/footer.html');
        ?>
</footer>
 <script src="../js/vendor/jquery.js"></script>
 <script src="../js/vendor/foundation.min.js"></script>
 <script src="../js/vendor/what-input.js"></script>
 <script src="../js/fix.js"></script>

</body>
</html>
