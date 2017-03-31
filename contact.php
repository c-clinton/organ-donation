<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Trillium Gift of Life Network</title>
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

    <h1 class="text-center"> Contact Us </h1>



    <section class="row" id="contactBody">

    <div class="small-12 small-centered medium-12 columns">


     <?php

if (isset ($_POST["contact_name"]) && isset ($_POST["contact_email"]) && isset ($_POST["contact_subject"]) && isset ($_POST["contact_message"])) {
		$contact_name = $_POST["contact_name"];
		$contact_email = $_POST["contact_email"];
    $contact_subject = $_POST["contact_subject"];
		$contact_message = $_POST["contact_message"];


		if (!empty ($contact_name) && !empty($contact_email) && !empty($contact_subject) && !empty($contact_message)) {
			if (strlen($contact_name)>50 || strlen($contact_email)>100) {
				echo "<p style='color: #054f18; text-align: center; line-height: 1.5; padding: 0;'>*Maximum Characters Exceeded For Some Fields. Please Try Again.*</p>";

			} else {
		$to = "info@giftoflife.on.ca";
		$subject = 'BeADonor.ca: Contact Form Submitted';
		$body = 'Name: '.$contact_name."\n".'Email: '.$contact_email."\n".'Subject: '.$contact_subject."\n".'Message: '.$contact_message;
		$headers = 'From: '.$contact_email;

		if (@mail($to, $subject, $body, $headers)) {
			echo "<p style='color: #054f18; text-align: center; line-height: 1.5; padding: 0;'>Thank You For Contacting Us! <br> We have received your message and will get back to you as soon as possible.</p>";
		} else {
			echo "<p style='color: #054f18; text-align: center; line-height: 1.5; padding: 0;'>Sorry, An Error Occurred. Please Try Again.</p>";
		}
			}

		} else {
			echo "<p style='color:red;'>*Please Fill Out All Required Fields*</p>";
		}
}


?>
<br>
    <div class="large-6 columns">
    <form id="contactForm" action="contact.php" method="post">
  <fieldset>
   <h3>General Inquiries</h3>

    <label>
    Your Name:
      <input required type="text" placeholder="Please Enter Your Name" maxlength="50" name="contact_name" size="10" required>
    </label>


    <label>
    Email:
      <input required type="text" placeholder="Please Enter Your Email" name="contact_email" required>
    </label>


    <label>
    Subject:
      <input type="text" placeholder="i.e. Registration Questions" name="contact_subject" required>
    </label>


  <label>
  	Message:
          <textarea required id="message" name="contact_message" cols="50" rows="8" placeholder="How Can We Help You Today?"></textarea>
    </label>

     	<input id="submit" type="submit" value="Send">

  </fieldset>
</form>
</div>

	<div class="hide-for-small-only large-6 columns" id="trill">
    <object data="images/GOL_logo.svg" width="600" height="280"></object>
    <p class="text1">Trillium Gift of Life Network (TGLN) is a not-for-profit agency of the Government of Ontario. TGLN plans, promotes, coordinates and supports organ and tissue donation and transplantation across Ontario. Its mission is to save and enhance lives through the gift of organ and tissue donation and transplantation in Ontario.</p>
    </div>


    <div class="medium-12 columns" id="contactInfo">


   <ul id="contactUs">
     <li><h3>Organ &amp; Tissue Donation Inquiries</h3></li>

     <li><object data="images/location2.svg" width="38" height="38"></object>
     <h4>By Mail:</h4>
     <p class="contactText">Trillium Gift of Life Network <br> 522 University Avenue, Suite 900 <br> Toronto, ON M5G 1W7</p>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.630895701689!2d-79.39155218482652!3d43.655847179121125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34c8e9ad2993%3A0xd7b4b7822d1d40f5!2s522+University+Ave%2C+Toronto%2C+ON+M5G!5e0!3m2!1sen!2sca!4v1487215037152" width="600" height="200" style="border:0" allowfullscreen class="hide-for-small-only"></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.630895701689!2d-79.39155218482652!3d43.655847179121125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34c8e9ad2993%3A0xd7b4b7822d1d40f5!2s522+University+Ave%2C+Toronto%2C+ON+M5G!5e0!3m2!1sen!2sca!4v1487215037152" width="200" height="100" style="border:0" allowfullscreen class="show-for-small-only small-centered" id="smallMap"></iframe>
      </li>


    <li><object data="images/phone.svg" id="phone" width="36" height="38" title="Phone"></object><h4>Phone:</h4>
    <p class="contactText2"><strong>General Inquiries</strong> <br> 1-800-263-2833 | 416-363-4001 </p>
    <p class="contactText2"><strong>Registration</strong> <br> 1-866-532-3161 | 416-314-5518 </p>
    <p class="contactText2"><strong>ServiceOntario</strong> <br> 1-800-387-5559 | 416-327-4282 </p>
    </li>

    <li><object data="images/mail.svg" id="email" width="36" height="38" title="Email"></object><h4>Email:</h4>
    <p>General Inquiries - <a class="green contactText3" href="mailto:info@giftoflife.on.ca">info@giftoflife.on.ca</a></p>
     <p>Starting A Drive - <a class="green contactText3" href="mailto:giftof8@giftoflife.on.ca.">giftof8@giftoflife.on.ca.</a></p>
      <p>Media Relations - <a class="green contactText3" href="mailto:Jlong@giftoflife.on.ca">Jlong@giftoflife.on.ca</a></p></li>

    <li><object data="images/mouseIcon2.svg" id="online" width="36" height="38" title="Online"></object><h4>Online:</h4><p class="contactText4"> Visit the Trillium Gift of Life Network website at <a class="green">www.giftoflife.on.ca</a></p></li>

    </ul>

 </div>

</div>
    </section>



    <section class="row hide-for-medium" id="connect">
    	<div class="small-12 small-centered columns">
        	<h2 class="text-center"> Stay Updated on News and Upcoming Events </h2>
            <h4 class="text-center"> Like, Follow, and Subscribe </h4>
            <a href="https://www.facebook.com/TrilliumGiftofLife" target="_blank"><img src="images/facebook.svg" alt="facebook" width="80" height="80" class="small-4 columns sms"></a>
             <a href="https://twitter.com/trilliumgift" target="_blank"><img src="images/twitter.svg" alt="twitter" width="80" height="80" class="small-4 columns sms"></a>
            <a href="https://www.youtube.com/user/TrilliumGift" target="_blank"> <img src="images/youtube.svg" alt="youtube" width="80" height="80" class="small-4 columns sms"></a>
        </div>
    </section>

    <section class="row hide-for-small-only" id="connectLG">
    	<div class="medium-12 medium-centered columns">
        	<h2 class="text-center updatedheader"> Stay Updated on News and Upcoming Events </h2>
            <h4 class="text-center updatedtext"> Like, Follow, and Subscribe </h4>
	<a href="https://www.facebook.com/TrilliumGiftofLife" target="_blank"><img src="images/facebook.svg" alt="facebook" class="medium-4 columns sms"></a>
             <a href="https://twitter.com/trilliumgift" target="_blank"><img src="images/twitter.svg"  alt="twitter" class="medium-4 columns sms"></a>
            <a href="https://www.youtube.com/user/TrilliumGift" target="_blank"> <img src="images/youtube.svg"  alt="youtube" class="medium-4 columns sms"></a>
        </div>
    </section>

    <br>



   <p class="text-center green top"> <a href="#" class="green text-center top">Back to Top</a></p>

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
  </body>
</html>
