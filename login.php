<?php
require_once('requires.php');
if(isUserLoggedIn()){
  Header('location: index.php');
}

$errores = [];
if ($_POST)
{
	$errores = validarLogin($_POST);
	if(!count($errores))
	{
		$errores = loguearUsuario($_POST);
	}
}

<?php if (count($errores)){ ?>
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>BA Private Guides - log in</title>
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
<main>

<div class="log">
  <form class="" action="" method="post">

      <p><label for="email">Email</label></p>
      <p><input type="text" name="email" value="<?php echo(isset($_POST['email']) ? $_POST['email'] : '') ?>" required></p>
      <br>
      <p><label for="pass">Password</label></p>
      <p><input type="text" name="pass" value="" required></p>
      <button type="subtmit" name="button">Log in</button>
      <input  type="checkbox" name="remember" value="remember"><label class="remember" for="remember">¿Remember me?</label>
      <br><br>
      <a href="#forgot">¿Forgot your password?</a>

  </form>
</div>

</main>
</div>

<div id="forgot" class="forgoten">
  <div class="forgot-contenido">
    <a href="#">X</a>
  <form class="" action="" method="post">

      <p><label for="email">Email</label></p>
      <p><input type="email" name="email" value="" required></p>
      <br>
      <button type="subtmit" name="button">Send</button>

  </form>
  </div>
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
