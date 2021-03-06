<?php require_once('requires.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>BA Private Guides</title>
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


<div class="sidebar">
  <hr>
  <p><a href="">Home</a></p>
  <hr>
    <p class="sidebut"><a href="">Buenos Aires city tour</a></p>
    <p class="sidebut"><a href="">Tigre delta tour</a></p>
    <p class="sidebut"><a href="">Pampas tour</a></p>
    <p class="sidebut"><a href="">Evita &amp; Peronism tour </a></p>
</div>



<main class="container_home">

  <section class="description">
    <h2>Our company and service</h2>
    <p>BA Private Guides was created to give Buenos Aires visitors the most personalized tours in town, characterized by punctuality and quick pick-ups, so you can spend your time experiencing the city, learning about its heritage, and enjoying everything.</p>
    <p>Our tour guides are experts in the topic of the tour and are fluent and proficient in English.</p>
    <p>Every person in our tours is treated as an active participant. We welcome questions, and you’ll have plenty of opportunities to interact with your guides.</p>
    <p>Thank you! And we look forward to seeing you soon in one of our activities!</p>
  </section>

  <br>

  <section class="tourlist">

     <article class="tour">
       <h2>Buenos Aires City Tour</h2>
       <div class="slider">
         <ul>
           <li><img src="./images/city/city1.jpg" alt="Buenos Aires City"></li>
           <li><img src="./images/city/city2.jpg" alt="Buenos Aires City"></li>
           <li><img src="./images/city/city3.jpg" alt="Buenos Aires City"></li>
         </ul>
    </div>
      <p>4 Hours - 1 TO 12 PEOPLE PER OUTING</p>
      <p>Visit the most famous parts of Buenos Aires. Discover Plaza de Mayo (the square that is the political heart of Argentina), then San Telmo (the first neighborhood for the wealthy, now rich in antiques), then La Boca (birthplace of Tango), and finally the city’s most elegant neighborhoods today: Puerto Madero, The Business District, Plaza San Martin, Palermo (wonderful mansions, parks, avenues and monuments), and Recoleta (great museums and an amazing cemetery).</p>
    </article>

    <br>

    <article class="tour">
      <h2>Tigre Delta Tour</h2>
      <div class="slider">
        <ul>
          <li><img src="./images/tigre/tigre.jpg" alt="Tigre Delta"></li>
          <li> <img src="./images/tigre/tigre2.jpg" alt="Tigre Delta"></li>
          <li><img src="./images/tigre/tigre3.jpg" alt="Tigre Delta"></li>
        </ul>
      </div>
      <p>4 Hours - 1 TO 12 PEOPLE PER OUTING</p>
      <p>Board a motor boat and sail and submerge yourself in the exotic, wild, and colorful delta, where you can see how natural life flourishes along with the life of the islands. Tour along the main rowing clubs, the mansions, and the artisan market of Tigre. You will also have the chance to visit the colonial center of San Isidro neighborhood, and pass by the Presidential Residence, the Monumental Stadium, University City, the Domestic Airport, and the marvelous boardwalk of the Rio de la Plata.</p>
    </article>

    <br>

    <article class="tour">
      <h2>Pampas Tour</h2>
      <div class="slider">
        <ul>
          <li><img src="./images/campo/campo1.jpg" alt="pampas estancia farm"></li>
          <li><img src="./images/campo/campo2.jpg" alt="pampas estancia farm"></li>
          <li><img src="./images/campo/campo3.jpg" alt="pampas estancia farm"></li>
        </ul>
      </div>
      <p>8 Hours - 1 TO 12 PEOPLE PER OUTING</p>
      <p>Visit San Antonio de Areco, the most distinguished Gaucho town of the Pampas, known as the cradle of Argentine tradition. You will then be welcomed by the owner of an estancia, where you will spend an exclusive farm day, including horse and carriage rides, and an invitation to enjoy “empanadas” (meat pastries), Argentine wines, and an “asado” (barbecue). We will delight you with a demonstration of gaucho skills on horseback, and with a folk dance show featuring the main local styles. Don’t miss the chance to try “mate” (typical infusion) and “pastelitos” (pastries), to swim in the pool, and to enjoy the landscapes.</p>
    </article>

    <br>

    <article class="tour">
      <h2>Evita & Peronism Tour</h2>
      <div class="slider">
        <ul>
          <li><img src="./images/peronismo/peronismo.jpg" alt="museo evita juan peron"></li>
          <li><img src="./images/peronismo/peronismo2.jpg" alt="museo evita juan peron"></li>
          <li><img src="./images/peronismo/peronismo3.jpg" alt="museo evita juan peron"></li>
        </ul>
      </div>
      <p>4 Hours - 1 TO 12 PEOPLE PER OUTING</p>
      <p>Discover the fascinating personality of Evita, and the main features of the Peronist political movement that her husband, Juan Perón, founded and led for thirty years (1945-74). This visit is specially recommended for those interested in the recent history of Argentina, and it is also recommended to anyone who wishes to understand more about Argentina’s present-day politics and society.</p>
    </article>

  </section>
</main>



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
