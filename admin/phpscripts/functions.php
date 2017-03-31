<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

	function redirect_to($location) {
		if($location != NULL) {
			header("Location:{$location}");
			exit;
		}
	}

	function addFaq($title,$answer) {

		include('connect.php');
		$title = mysqli_real_escape_string($link,$title);
		$answer = mysqli_real_escape_string($link,$answer);

			$qstring = "INSERT INTO tbl_infofaq VALUES(NULL, '{$title}', '{$answer}')";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			$qstring2 = "SELECT * FROM tbl_infofaq ORDER BY infofaq_id DESC LIMIT 1"; 
			$result2 = mysqli_query($link, $qstring2);

			$row = mysqli_fetch_array($result2);
			$lastID = $row['infofaq_id'];

			}

			redirect_to("../admin_index.php");

		}

		function addStoryVideo($vid_path,$vid_title,$vid_thumb,$vid_caption,$vid_caption_fr,$vid_title_fr,$vid_desc_p1,$vid_desc_p2,$vid_desc_p3,$vid_desc_p1_fr,$vid_desc_p2_fr,$vid_desc_p3_fr) {

			include('connect.php');

			$vid_path = mysqli_real_escape_string($link,$vid_path);
			$vid_title = mysqli_real_escape_string($link,$vid_title);
			$vid_thumb = mysqli_real_escape_string($link,$vid_thumb);
			$vid_caption = mysqli_real_escape_string($link,$vid_caption);
			$vid_caption_fr = mysqli_real_escape_string($link,$vid_caption_fr);
			$vid_title_fr = mysqli_real_escape_string($link,$vid_title_fr);
			$vid_desc_p1 = mysqli_real_escape_string($link,$vid_desc_p1);
			$vid_desc_p2 = mysqli_real_escape_string($link,$vid_desc_p2);
			$vid_desc_p3 = mysqli_real_escape_string($link,$vid_desc_p3);
			$vid_desc_p1_fr = mysqli_real_escape_string($link,$vid_desc_p1_fr);
			$vid_desc_p2_fr = mysqli_real_escape_string($link,$vid_desc_p2_fr);
			$vid_desc_p3_fr = mysqli_real_escape_string($link,$vid_desc_p3_fr);

				$qstring3 = "INSERT INTO tbl_vids VALUES(NULL, '{$vid_path}', '{$vid_title}', '{$vid_thumb}',  '{$vid_caption}', '{$vid_caption_fr}', '{$vid_title_fr}', '{$vid_desc_p1}', '{$vid_desc_p2}', '{$vid_desc_p3}', '{$vid_desc_p1_fr}', '{$vid_desc_p2_fr}', '{$vid_desc_p3_fr}')";
				$result3 = mysqli_query($link, $qstring3);

				if($result3==1){ 

				$qstring4 = "SELECT * FROM tbl_vids ORDER BY vid_id DESC LIMIT 1";
				$result4 = mysqli_query($link, $qstring4);

				$row2 = mysqli_fetch_array($result4);
				$lastID2 = $row2['vid_id'];

				}

				redirect_to("../admin_index.php");

			}
			
					function addInfoVideo($vid_path,$vid_title,$vid_thumb,$vid_title_fr) {

			include('connect.php');

			$vid_path = mysqli_real_escape_string($link,$vid_path);
			$vid_title = mysqli_real_escape_string($link,$vid_title);
			$vid_thumb = mysqli_real_escape_string($link,$vid_thumb);
			$vid_title_fr = mysqli_real_escape_string($link,$vid_title_fr);

				$qstring3 = "INSERT INTO tbl_infovids VALUES(NULL, '{$vid_path}', '{$vid_title}', '{$vid_thumb}',  '{$vid_title_fr}')";
				$result3 = mysqli_query($link, $qstring3);

				if($result3==1){ 

				$qstring4 = "SELECT * FROM tbl_infovids ORDER BY vid_id DESC LIMIT 1";
				$result4 = mysqli_query($link, $qstring4);

				$row2 = mysqli_fetch_array($result4);
				$lastID2 = $row2['vid_id'];

				}
				redirect_to("../admin_index.php");

			}



			function addDrive($driveslist_img, $driveslist_title, $driveslist_datestarted, $driveslist_clicksregister, $driveslist_clicksmonth) {

				include('connect.php');


				$driveslist_img = mysqli_real_escape_string($link, $driveslist_img);
				$driveslist_title = mysqli_real_escape_string($link, $driveslist_title);
				$driveslist_datestarted = mysqli_real_escape_string($link, $driveslist_datestarted);
				$driveslist_clicksregister = mysqli_real_escape_string($link, $driveslist_clicksregister);
				$driveslist_clicksmonth = mysqli_real_escape_string($link, $driveslist_clicksmonth);

					$qstring5 = "INSERT INTO tbl_driveslist VALUES(NULL, '{$driveslist_img}', '{$driveslist_title}', '{$driveslist_datestarted}', '{$driveslist_clicksregister}', '{$driveslist_clicksmonth}')";
					$result5 = mysqli_query($link, $qstring5);

					if($result5==1){ 

					$qstring6 = "SELECT * FROM tbl_driveslist ORDER BY driveslist_id DESC LIMIT 1";
					$result6 = mysqli_query($link, $qstring6);

					$row3 = mysqli_fetch_array($result6);
					$lastID3 = $row3['driveslist_id'];

					}

	
					redirect_to("../admin_index.php");

				}




	function mailUser($fname, $lname, $username, $email, $password) {

	include('connect.php');

	$url = "www.msmedia.ca/organ-donation-working-build/admin_login.php";

	$admin = "info@giftoflife.on.ca";

	$subject = "Welcome to the site, '{$fname}' '{$lname}'!";

	$message = "We're so glad you made it.\n\n Your username is '{$username}', and you temporary password is '{$password}'; you can log in at '{$url}'.\n\n If you do not remember signing up, contact us at '{$admin}'.\n\n Have a nice day.";

	mail($email, $subject, $message);


	mysqli_close($link);
}

?>
