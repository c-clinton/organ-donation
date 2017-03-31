<?php

	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('admin/phpscripts/init.php');

		$tbl = "tbl_vids"; 
		$getVids = getAll($tbl);


?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories - Trillium Gift of Life Network</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>




      <div class="wrapper">
   <header>
 <?php
        include('includes/topbar.html');
        ?>
      <?php
        include('includes/nav.html');
        ?>
    <?php
        include('includes/ban.html');
        ?>
 </header>
    <main>

 <section class="row">

    <div class="columns">

    <h1>Stories</h1>

    <h2 class="vidtitle">Meet Ryley</h2>

    <video controls width="auto" height="auto" class="vidcon small-12 medium-9 columns">
     <source class="flex-video mainvid" src="videos/ryley.mp4" type="video/mp4">
     <p>Your browser does not support HTML5 video.</p>
    </video>

<div class="small-12 medium-3 thumbcon thumbs columns">
  
    <?php
        if(!is_string($getVids)){
            while($row2 = mysqli_fetch_array($getVids)){
              echo "<div class=\"small-centered medium-uncentered\"><p class='text-center'>{$row2['vid_title']}</p>
              <a href='#'><img src=\"{$row2['vid_thumb']}\" alt=\"{$row2['vid_title']}\" class=\"{$row2['vid_id']}\"></a></div>";
            }
          }else{
		echo "<p>{$getVids}</p>";
	}

    ?>
  </div>

    </div>
    </div>
    </div>
    </section>

   <hr>

    <section class="row">

    <div class="column storyText">
    <h1 class="vidcaption">"I heard the words &lsquo;enlarged heart&rsquo;. I knew it was bad."</h1>

    <p class="viddescp1">Ryley was only two months old when she became quite ill. It was in the ER that her mother, Joanna, heard the words "enlarged heart." She remembers asking the doctor, "So you're telling me that my baby is going to die? And he said, 'No. But there's a good chance she's going to need a heart transplant.'"</p>

<p class="viddescp2">Joanna and her husband were living in a hotel near the transplant centre when they received a 2:00 a.m. call that a heart was available for Ryley. By 9:30 p.m. that night, they were able to see their daughter after her transplant surgery. "She was on a breathing tube...but she was pink. And she just looked so wonderful."</p>

<p class="viddescp3">Ryley hasn't looked back since her transplant. She's an active, loving and brave little girl. Having faced the fear of losing her own child, Joanna is so thankful to the donor family and would encourage all Ontarians to become registered organ donors. "If you needed an organ, would you take one? If you would...why wouldn't you share yours to save somebody else's life? It makes you a hero."
</p>

</div>

    </section>

    <hr>

    <section class="row">
    <h1 class="text-center columns"><span class="storyHelp">Want to Help Someone Like </span><span class="nametext">Ryley</span>?</h1>
    <h2 class="text-center columns startdrivetext">It's easy to start your own registration drive. Do it as an individual or on behalf of your company or community group.</h2>
     <div id="drivebut" class="small-centered text-center small-4 medium-3 columns"><h3><a href="#" class="driveLink">Start a Drive</a></h3></div>
    </section>

    </main>


 <footer>
      <?php
        include('includes/footer.html');
        ?>
</footer>
    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
     <script src="js/vidjs.js"></script>
  </body>
</html>
