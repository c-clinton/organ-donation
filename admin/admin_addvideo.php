<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
		confirm_logged_in();

	$tbl = 'tbl_vids2';
	$catQuery = getAll($tbl);


	if(isset($_POST['submit'])) {
		$vid2_path = $_FILES['vid2_path']['name'];

	$vid_title = $_POST['vid_title'];
	$vid_title = $_POST['vid_thumb'];
	$vid_caption = $_POST['vid_caption'];
	$vid_caption_fr = $_POST['vid_caption_fr'];
	$vid_title_fr = $_POST['vid_title_fr'];
	$vid_desc_p1 = $_POST['vid_desc_p1'];
	$vid_desc_p2 = $_POST['vid_desc_p2'];
	$vid_desc_p3 = $_POST['vid_desc_p3'];
	$vid_desc_p1_fr = $_POST['vid_desc_p1_fr'];
	$vid_desc_p2_fr = $_POST['vid_desc_p2_fr'];
	$vid_desc_p3_fr = $_POST['vid_desc_p3_fr'];


	$uploadVideo = addVideo($vid_path,$vid_title, $vid_thumb, $vid_caption,$vid_caption_fr,$vid_title_fr,$vid_desc_p1,$vid_desc_p2,$vid_desc_p3,$vid_desc_p1_fr,$vid_desc_p2_fr,$vid_desc_p3_fr);
	$message = $uploadVideo;
	}
?>

<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add A Video</title>
	<link rel="stylesheet" href="../css/foundation.min.css">
	<link rel="stylesheet" href="../css/app.css">
</head>
<body>
   <header>

 </header>
	<div id="editVideos">
<h1>Add Videos to Information Page:</h1><br>
<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addvideo.php" method="post" enctype="multipart/form-data" id="videoForm"> <!--looks for multi part files like movies and shit-->
<label>Add New Video:</label>
<input type="file" name="vid_path" value="" size="32"><br>
<label>Video Title:</label>
<input type="text" name="vid_title" value="" size="32"><br>
<label>Video Thumbnail:</label>
<input type="text" name="vid_thumb" value="" size="32"><br>
<label>Video Caption:</label>
<input type="text" name="vid_caption" value="" size="32"><br>
<label>Video Caption (French)</label>
<input type="text" name="vid_caption_fr" value="" size="32"><br>
<label>Video Title (French):</label>
<input type="text" name="vid_title_fr" value="" size="32"><br>
<label>Video Description Paragraph 1:</label>
<input type="text" name="vid_desc_p1" value="" size="32"><br>
<label>Video Description Paragraph 2:</label>
<input type="text" name="vid_desc_p2" value="" size="32"><br>
<label>Video Description Paragraph 3:</label>
<input type="text" name="vid_desc_p3" value="" size="32"><br>
<label>Video Description Paragraph 1 (French):</label>
<input type="text" name="vid_desc_p1_fr" value="" size="32"><br>
<label>Video Description Paragraph 2 (French):</label>
<input type="text" name="vid_desc_p2_fr" value="" size="32"><br>
<label>Video Description Paragraph 3 (French):</label>
<input type="text" name="vid_desc_p3_fr" value="" size="32"><br>

<input class="button importantbut submit" type="submit" name="submit" value="ADD VIDEO"><br><br>
</form>
<br>
<a href="../admin_index.php">Back</a>
<br>
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
</body>
</html>
