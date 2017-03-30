<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Trillium Gift of Life Network</title>
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
    <section id="introvid" class="visible">
    <h1 class="hidden">Welcome</h1>
      <div id="vidoverlay">
        <a href="#" id="skip">
          Skip Video
        </a>
      </div>
       <video id="vid" controls width="100%" height="auto" autoplay>
     <source class="flex-video" src="videos/introvid.mp4" type="video/mp4">
     <p>Your browser does not support HTML5 video.</p>
    </video>
  </section>

   <section id="home">

      <section class="hidden largeimgcon">
      <div class="row">
      <div class="whitebg medium-6 medium-push-6 text-center columns">
      <h1 class="slogan">Use Your Time Wisely</h1>
      <p class="textlarge steps">Becoming an organ donor takes three easy steps:</p>
      <h3 class="step1">Have your health card number ready.</h3>
      <img class="small-4 medium-3 large-2" src="images/healthcardicon.svg" alt="health card icon">
      <h3 class="step2">Click 'Register or Check Now'.</h3>
      <img class="small-4 medium-3 large-2" src="images/mouseicon.svg" alt="mouse icon">
      <h3 class="step3">Spread the word to save more lives.</h3>
     <img class="small-4 medium-3 large-2" src="images/speaker.svg" alt="speaker icon">
      </div>
      </div>
      </section>

	<div class="space">
    <div class="hometext">
     <section class="row">

      <h1 class="show-for-small-only small-12 hometitle1-0 columns">Our Mission</h1>
      <img class="show-for-small-only small-12 columns homeimg" src="images/mission.jpg" alt="Becoming an organ donor saves lives and families.">
      <p class="show-for-small-only small-12 columns ourmission1-0"></p>
       <p class="show-for-small-only small-12 columns ourmission2-0">Our aim is to spread awareness of the need for organ donors, provide <a href="about.php" class="green">information</a> on donor registration, and chronicle the stories of real organ-transplant recipients and how their lives have changed thanks to the kindness of Ontarian donors.</p>

      <img src="images/mission.jpg"  id="missionimg" alt="Becoming an organ donor saves lives and families." class="show-for-medium medium-6 columns homeimg">
      <div class="medium-6 show-for-medium columns">
      <h1 class="hometitle1-1">Our Mission</h1>
      <p class="ourmission1-1">Currently, almost 1,600 people in Ontario are waiting for a life-saving organ transplant. And though most of us believe that organ donation is a good thing, just over a quarter of us are registered as donors.</p>

	<p class="ourmission2-1">We aim to share <a href="about.php" class="green">information</a> on donor registration, and chronicle the stories of real organ-transplant recipients and how their lives have changed thanks to the kindness of Ontarian donors.</p>
    </div>

    </section>
    </div>


     <div class="space">
     <section>

     <div class="row">
      <h1 class="small-12 hometitle2 columns">Getting Involved</h1>
      <p class="small-12 columns getinvolved1">Currently, almost 1,600 people in Ontario are waiting for a life-saving organ transplant. And though most of us believe that organ donation is a good thing, just over a quarter of us are registered as donors. Some great strides have been made in Ontario over the past year, but still more needs to be done. </p>
      </div>
      <img class="small-12 homeimg" src="images/couple.jpg" alt="Being a donor could save the life of someone dear.">
      <div class="row">
      <p class="small-12 columns getinvolved2">You can Spread the Word by encouraging your friends and family to register their consent to become organ and tissue donors. The best way to get involved is by registering your consent to bcome an organ donor. After you have registered, you can further promote the cause by starting a personal or organizational drive to encourage friends, family, and others to register their consent. It's easy to start your own registration drive, you can do it as an individual or on behalf of your company or community group. Click here to learn how to start your own drive.
</p>
		<hr class="small-2">

	   <p class="small-12 columns getinvolved3">You can also spread the word by sharing the link to this website or to the ServiceOntario registration page on your social media platform of choice. Remind your friends to #useyourtimewisely and #take2minutes to register and potentially save up to 8 lives.
</p>
      </div>

    </section>
    </div>
    </div>

    <hr>

    <section id="share" class="row">

      <div class="small-12 columns">
      <h1 class="text-center spreadword">Spread the Word</h1>
      <div class="small-centered text-center small-12 medium-6">
    <a href="http://www.facebook.com/TrilliumGiftofLife" target="_blank"><img src="images/fb_colored.png" alt="facebook"></a>
    <a href="http://twitter.com/trilliumgift" target="_blank"><img src="images/tw_colored.png" alt="twitter"></a>
      <a href="https://www.youtube.com/ongov" target="_blank"><img src="images/yt_colored.png" alt="youtube"></a>
      <h2 class="text-center swtext">You can also get involved by starting a drive of your own. Click below to learn more.</h2>
      </div>
      <div id="drivebut" class="small-centered text-center small-4 medium-3"><h3><a href="drives.php" class="driveslink">Start a Drive</a></h3></div>
      </div>

    </section>
    </section>
    </main>



<footer>
      <?php
        include('includes/footer.html');
        ?>
</footer>

    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/app.js"></script>
    <script src="js/introscript.js"></script>
    <script src="js/homereq.js"></script>
  </body>
</html>
