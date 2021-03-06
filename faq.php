<?php require_once('requires.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>BA Private Guides - FAQ</title>
  </head>

  <body>

    <header>
      <h1><a href="./index.php"><img src="./images/baprivateguides.png" alt="logo BA Private Guides" height="120" class="logo"></a></h1>
        <h2>Tailor-made tours for the curious traveler</h2>
      <nav>
        <ul>

          <li><a href="./index.php">Home</a></li>
          <li><a href="./faq.php">FAQ</a></li>

              <?php
              if(isUserLoggedIn()){
            		echo '<li class="right>"<img src="'.$_SESSION['user']['avatar'].'" width="20px" ></li>';
            		echo '<li class="right"><a href="logout.php">Logout</a></li>';
            	}
            	else
            	{
                echo '<li class="right"><a href="./login.php">Log in</a></li>
                <li id="separator"class="right">/</li>
                <li class="right"><a href="./signup.php">Sign up</a></li>';
            	}
              ?>


        </ul>
      </nav>
    </header>


<div class="container">
<main >

  <section>
    <h2>FREQUENTLY ASKED QUESTIONS</h2>
    <p>If you could not find the information you are looking for, you will probably find it in this FAQ</p>
  </section>

  <br>

  <section >

    <article class="quest">
      <h3>What is the cancellation policy?</h3>
      <ul>
        <li>Free of charge, if cancelled at least 4 days before the tour.</li>
        <li>50% charge, if cancelled 2-3 days before the tour.</li>
        <li>100% charge, if cancelled the day before the tour or later.</li>
      </ul>
    </article>

    <br>

    <article class="quest">
      <h3>What kind of transportation is being provided?</h3>
      <ul>
        <li>For 1 or 2 people, a car with a professional driver.</li>
        <li>For 3 to 12 people, a Mercedes Sprinter van with a professional driver.</li>
        <li>Other vehicles can be used with prior notice.</li>
      </ul>
    </article>

    <br>

    <article class="quest">
      <h3>Where is the pick-up and the drop-off?</h3>
      <ul>
        <li>You choose where to be picked up and dropped off.</li>
        <li>It can be your hotel, a restaurant, the cruise ship terminal or the airport.</li>
        <li>Please, let us know in advance.</li>
      </ul>
    </article>

    <br>

    <article class="quest">
      <h3>What services are included in our tours?</h3>
      <ul>
        <li>The tour includes an English-speaking guide, transportation and any fee that could arise from the activites proposed by the guide, unless specifically stated.</li>
        <li>The Pampas Tour also includes lunch and some drinks.</li>
      </ul>
    </article>

    <br>

    <article class="quest">
      <h3>Which payment methods are available?</h3>
      <ul>
        <li>Payment should be completed at least one week before the scheduled date of the tour.</li>
        <li>We welcome payments through PayPal (multiple currencies are supported), bank transfer (US dollars), and bitcoins.</li>
      </ul>
    </article>

    <br>

  </section>

</main>
</div>

<footer>
  <div class="footer_container">
  <section class="footersect">
  <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
  </section>
  <section id="faqfoot" class="footersect">
  <p><a href="./faq.html">FAQ</a></p>
  </section>
  <section class="footersect">
    <p>
    <a href="+54 9 11 " target="_blank"><img src="./images/phone.png" alt=""></a>
    <a href="mailto:" target="_blank"><img src="./images/email.png" alt=""></a>
    <a href="http://facebook.com" target="_blank"><img src="./images/facebook.png" alt=""></a>
    <a href="http://twiter.com" target="_blank"><img src="./images/twitter.png" alt=""></a>
    <a href="" target="_blank"><img src="./images/instagram.png" alt=""></a>
    </p>
  </section>
</div>
</footer>
  </body>


  </html>
