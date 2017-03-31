<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	$tbl = 'tbl_vids2';
	$catQuery = getAll($tbl); //this uses the function in read to get the movies from the database


	if(isset($_POST['submit'])) {
		$vid2_path = $_FILES['vid2_path']['name'];

		//echo $fimg;

	//	$thumb = "TH_".$fimg;


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
<meta charset="UTF-8">
<title>Add Video</title>
</head>
<body>
<h1>Add Videos to Information Page</h1>
<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addvideo.php" method="post" enctype="multipart/form-data"> <!--looks for multi part files like movies and shit-->
<label>Add New Video:</label><br>
<input type="file" name="vid_path" value="" size="32"><br><br>
<label>Video Title:</label><br>
<input type="text" name="vid_title" value="" size="32"><br><br>
<label>Video Thumbnail:</label><br>
<input type="text" name="vid_thumb" value="" size="32"><br><br>
<label>Video Caption:</label><br>
<input type="text" name="vid_caption" value="" size="32"><br><br>
<label>Video Caption (French)</label><br>
<input type="text" name="vid_caption_fr" value="" size="32"><br><br>
<label>Video Title (French):</label><br>
<input type="text" name="vid_title_fr" value="" size="32"><br><br>
<label>Video Description Paragraph 1:</label><br>
<input type="text" name="vid_desc_p1" value="" size="32"><br><br>
<label>Video Description Paragraph 2:</label><br>
<input type="text" name="vid_desc_p2" value="" size="32"><br><br>
<label>Video Description Paragraph 3:</label><br>
<input type="text" name="vid_desc_p3" value="" size="32"><br><br>
<label>Video Description Paragraph 1 (French):</label><br>
<input type="text" name="vid_desc_p1_fr" value="" size="32"><br><br>
<label>Video Description Paragraph 2 (French):</label><br>
<input type="text" name="vid_desc_p2_fr" value="" size="32"><br><br>
<label>Video Description Paragraph 3 (French):</label><br>
<input type="text" name="vid_desc_p3_fr" value="" size="32"><br><br>

<input type="submit" name="submit" value="Add Video">
</form>
</body>
</html>
