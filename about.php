<?php

	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('admin/phpscripts/init.php');

		$tbl = "tbl_infofaq";
		$getFaqs = getAll($tbl);
		
		$tbl2 = "tbl_infofaqfr";
		$getFaqsFr = getAll($tbl2);


?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information - Trillium Gift of Life Network</title>
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

    <h1>Key Facts</h1>

    <h2 class="vidtitle">Organ Donation 101</h2>

    <video controls width="auto" height="auto" class="vidcon small-12 large-9 columns">
     <source class="flex-video mainvid" src="videos/infovid1.mp4" type="video/mp4">
     <p>Your browser does not support HTML5 video.</p>
    </video>

	<div class="thumbcon">
    <div class="mobilethumbs hide-for-large row">
    <div class="small-12 medium-3 columns">
    <p class="aboutVid1Title">Organ Donation 101</p>
    <img src="images/infographic_thumb.jpg" alt="infovid" id="firstthumb" class="1">
    </div>
   	<div class="small-12 medium-3 columns" >
    <p class="aboutVid2Title">How to Register</p>
    <img src="images/second_thumb.jpg" alt="how to register" class="2">
    </div>

    </div>




    <div class="thumbs large-3 show-for-large columns">

    <div class="thumb1">
    <p class="show-for-large text-center aboutVid1Title">Organ Donation 101</p>
    <a href="#"><img src="images/infographic_thumb.jpg" alt="Meet Ryley" class="1"></a>
    </div>

    <div>
    <p class="text-center aboutVid2Title">How to Register</p>
    <a href="#"><img src="images/second_thumb.jpg" alt="Meet Andrea" class="2"></a>
    </div>

    </div>
    </div>
    </div>

    <hr>

    </section>



    <section class="row">

    <div class="columns">

    <h1>FAQ</h1>

    <div class="small-12 columns">

    <p>If you have a specific question to ask, <a href="contact.php" class="green">let us know</a>.</p>
    
     <?php
        if(!is_string($getFaqs)){
            while($row = mysqli_fetch_array($getFaqs)){
              echo "<details class=\"eng\"><summary div class=\"arrow\"><div class=\"row\"><h2 class=\"small-8 column faq1\">{$row['infofaq_question']}</h2></div></summary><p class=\"columns faqInfo1\">{$row['infofaq_answer']}</p> </details>";
            }
          }else{
            echo "<p>{$getFaqs}</p>";
          }
		    if(!is_string($getFaqsFr)){
            while($row = mysqli_fetch_array($getFaqsFr)){
              echo "<details class=\"fr\"><summary div class=\"arrow\"><div class=\"row\"><h2 class=\"small-8 column faq1\">{$row['infofaq_question']}</h2></div></summary><p class=\"columns faqInfo1\">{$row['infofaq_answer']}</p> </details>";
            }
          }else{
            echo "<p>{$getFaqs}</p>";
          }
    ?>

    </div>
</div>


    </section>


    <div class="space ">
    <section class="row">

    <div class="columns">

    <h1 class="infotitle1">The Donation Process</h1>

    <p class="textlarge donationprocess1">In Ontario, organ and tissue donation is coordinated and managed by Trillium Gift of Life Network. Though everyone is a potential donor, you may be surprised to learn that the opportunity for organ donation is rare, because of the need to sustain a patient on a ventilator. In fact, you are five times more likely to need an organ transplant during your lifetime than to have the opportunity to donate one. On average, only three per cent of hospital deaths occur in circumstances that may lead to organ donation. This is not the case for tissue donation, which can take place in most cases when someone has died, as long as the tissue is suitable for transplantation.</p>

    <hr class="small-3">

<p class="donationprocess2">Because opportunities for organ donation are relatively rare and the impact is life-saving, it's important that Ontarians give serious thought to organ and tissue donation and register their consent to donate. By registering, you are essentially making a decision to help save lives after death through organ and tissue donation. By making this decision, you give hope to patients waiting for a life saving or life enhancing transplant and their families.</p>

<p class="donationprocess3">Your decision to register is confidential. It is stored in a Ministry of Health and Long-Term Care database and it will only be disclosed to Trillium Gift of Life Network at the appropriate time, once it has been determined that lifesaving efforts have failed. Specially trained staff will then share registration details with your family during end-of-life discussions, to help them make a choice about donation. By registering your consent to donate, you relieve your family of the burden of making this decision on your behalf.</p>

<hr class="small-3">

<p class="donationprocess4">Once a family has consented to donation, testing is done to confirm the medical suitability of the organs and tissue, and to determine which patients waiting for organ transplantation are the best match for the donated organs. This includes a medical and social history of the donor, similar to the questionnaire completed when donating blood. Trillium Gift of Life Network works closely with a team of healthcare professionals to support grieving families through this process, and to ensure that as many people as possible benefit from the generous gift of organs and/or tissue.</p>

<p class="donationprocess5">Recovery of organs occurs in the operating room and it is done with skill and respect by physicians. Donation typically does not impact funeral or burial plans, and it often occurs while families are making these arrangements and contacting others. In fact, an open casket funeral is possible. Trillium Gift of Life Network stays in contact with families during this time to inform them when organ and tissue recovery is complete and to share some general information on the recipients.</p>

<p class="donationprocess6">Through the Donor Family Support program, Trillium Gift of life Network provides continued support, as well as the opportunity to communicate anonymously with recipients. Donor families are recognized and honoured at an annual Celebration of Life, an event held to acknowledge and celebrate the extraordinary gift donor families have given.</p>

    </div>
  </section>
  </div>

    <div class="space">
    <section class="row">

    <div class="columns">

    <h1 class="small-12 text-center infotitle2">Stats</h1>

    <h2 class="text-center infotitle3">The need for organ donors in Ontario</h2>

    <p class="statInfo1">Currently, almost 1,600 people in Ontario are waiting for a life-saving organ transplant. And though most of us believe that organ donation is a good thing, just over a quarter of us are registered as donors. Some great strides have been made in Ontario over the past year, but still more needs to be done. You can <a class="green" href="drives.php">Spread the Word</a> by encouraging your friends and family to register their consent to become organ and tissue donors.</p>

	<div class="statistics small-12 row">
    <div class="small-centered text-center columns"><h3 class="statnumbers statInfo2">31%</h3>
	<p class="textsmall statInfo3">of Ontarians are registered donors. That&rsquo;s 3.7 million out of an eligible 12.1 million.</p>
	</div>

	<div class="small-centered text-center columns"><h3 class="statnumbers stat2 statInfo4">1,528</h3>
	<p class="textsmall statInfo5">Ontarians are currently waiting for an organ transplant. As of December 31, 2016</p>
	</div>

    <div class="small-centered text-center  columns"><h3 class="statnumbers stat3 statInfo6">13,300</h3>
	<p class="textsmall statInfo7">Ontarians have received a lifesaving organ transplant since 2003.</p>
	</div>

    </div>


    <h2 class="statInfo8">Our goal is to achieve 254,000 new registrations April 1, 2016 - March 31, 2017.</h2>


    <div class="small-12 columns">

    <div class="row">

      <p class="small-12 medium-6 circlebig red columns"><span class="circletext1">

We reached</span>

<span class="statnumbers redtext statInfo9">77%</span>

<span class="circletext2">of our total goal

as of December 31, 2016</span>
</p>

<div class="small-12 medium-6 columns">

<h1 class="statnumbers redtext statInfo10">195,241</h1>

<p class="statInfo11">Ontarians that have registered to become organ and tissue donors.

Updated every 3 months</p>
</div>

   </div>


    <hr class="small-3">

    <h3 class="text-center">Congratulations to our top communities:</h3>


    <div class="small-12 columns">

<div class="row">
  <div class="small-12 medium-6 columns">
  <h4>Most Improved Registration Rate</h4>
  <p class="regDateRange">From September 30, 2016 to December 31, 2016</p>
</div>

<div class="show-for-medium medium-6 columns">
 <h4>Highest Registration Rate Overall</h4>
  <p class="regDate">at December 31, 2016</p>
</div>
</div>

      <div  class="small-12 medium-6 columns">

    <table>
  <thead>
    <tr>
      <th>Rank</th>
      <th>Community</th>
    </tr>
  </thead>
  <tbody>
    <tr>
   <td><div class="circlenumbers">1</div></td>
      <td><a href="#" class="green mostimp1">Carleton Place</a> | 3.9% increase </td>
    </tr>
    <tr>
   <td><div class="circlenumbers">2</div></td>
      <td><a class="green mostimp2" href="#">Wasaga Beach</a> | 3.5% increase</td>
    </tr>
    <tr>
   <td><div class="circlenumbers">3</div></td>
      <td><a class="green mostimp3" href="#">Lindsay</a> | 3.5% increase </td>
    </tr>

    <tr>
    <td><div class="circlenumbers">4</div></td>
      <td><a class="green mostimp4" href="#">Port Perry</a> | 3.0% increase </td>
    </tr>
     <tr>
     <td><div class="circlenumbers">5</div></td>
      <td><a class="green mostimp5" href="#">Strathroy</a> | 3.0% increase </td>
    </tr>
</tbody>
</table>
</div>


<div class="small-12 show-for-small-only columns">
 <h4>Highest Registration Rate Overall</h4>
  <p class="regDate">at December 31, 2016</p>
</div>


<div  class="small-12 medium-6 columns">
   <table>
  <thead>
    <tr>
      <th>Rank</th>
      <th>Community</th>
    </tr>
  </thead>
  <tbody>
       <tr>
      <td><div class="circlenumbers">1</div></td>
      <td><a href="#" class="green highestReg1">Parry Sound</a> | 54% donor registration </td>
    </tr>
    <tr>
      <td><div class="circlenumbers">2</div></td>
      <td><a class="green highestReg2" href="#">North Bay | 54% donor registration</a></td>
    </tr>
    <tr>
     <td><div class="circlenumbers">3</div></td>
      <td><a class="green highestReg3" href="#">Kincardine</a> | 52% donor registration </td>
    </tr>

    <tr>
      <td><div class="circlenumbers">4</div></td>
      <td><a class="green highestReg4" href="#">Sudbury</a> | 52% donor registration </td>
    </tr>
     <tr>
      <td><div class="circlenumbers">5</div></td>
      <td><a class="green highestReg5" href="#">Nipissing South</a> | 52% donor registration  | 3.0% increase </td>
    </tr>
  </tbody>
</table>

</div>

</div>
</div>
</div>

    </section>
    </div>


    <section class="row hide-for-medium connect">

       <div class="small-12 small-centered columns">

           <h2 class="text-center h2"> Share Your Success </h2>

           <h4 class="text-center"> Share your drive on social media to encourage others to join or start their own! </h4>

           <a href="https://www.facebook.com/TrilliumGiftofLife" target="_blank"><img src="images/facebook.svg" alt="facebook" width="80" height="80" class="small-4 columns sms"></a>

            <a href="https://twitter.com/trilliumgift" target="_blank"><img src="images/twitter.svg" alt="twitter" width="80" height="80" class="small-4 columns sms"></a>

           <a href="https://www.youtube.com/user/TrilliumGift" target="_blank"> <img src="images/youtube.svg" alt="youtube" width="80" height="80" class="small-4 columns sms"></a>

       </div>

   </section>



   <section class="row hide-for-small-only connectLG">

       <div class="medium-12 medium-centered columns">

           <h2 class="text-center updatedheader"> Stay Updated on News and Upcoming Events </h2>

           <h4 class="text-center updatedtext"> Like, Follow, and Subscribe </h4>

    <a href="https://www.facebook.com/TrilliumGiftofLife" target="_blank"><img src="images/facebook.svg" alt="facebook" class="medium-4 columns sms"></a>

            <a href="https://twitter.com/trilliumgift" target="_blank"><img src="images/twitter.svg"  alt="twitter" class="medium-4 columns sms"></a>

           <a href="https://www.youtube.com/user/TrilliumGift" target="_blank"> <img src="images/youtube.svg" alt="youtube" class="medium-4 columns sms"></a>

       </div>

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
    <script src="js/aboutvid.js"></script>
    <script src="js/aboutreq.js"></script>
  </body>
</html>
