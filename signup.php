
<?php
require_once('requires.php');

if(isUserLoggedIn()){
  Header('location: index.php');
}

$meses = [1 => "Enero", 2 => "Febrero",
3 => "Marzo", 4 => "Abril",
5 => "Mayo", 6 => "Junio",
7 => "Julio", 8 => "Agosto",
9 => "Septiembre", 10 => "Octubre",
11 => "Noviembre", 12 => "Diciembre"];

$nombre = $_POST['name'] ?? null;
$apellido = $_POST['surname'] ?? null;
$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;
$emailConfirm = isset($_POST['email_confirm']) ? $_POST['email_confirm'] : null;
$genero = $_POST['genero'] ?? null;
$dia = $_POST['fnac_dia'] ?? null;
$mes = $_POST['fnac_mes'] ?? null;
$anio = $_POST['fnac_anio'] ?? null;

$errores = [];
if($_POST)
{

	if(!($errores = registrar($_POST)))
	{
		header('location: index.php');
		exit;
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>BA Private Guides - sign up</title>
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


<form class="signup" action="" method="post">


    <label for="nombre">Name:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" required><br><br>
    <label for="apellido">Surname:</label>
        <input type="text" name="apellido" value="<?php echo $apellido; ?>" required><br><br>
    <label for="genero">Sex:</label><br>
        <input type="radio" name="genero" value="0" required>
        <?php echo($genero === "0") ? 'checked="checked"' : ''; ?>Male
        <input type="radio" name="genero" value="1" required>
        <?php echo($genero === "1") ? 'checked="checked"' : ''; ?>Female
        <input type="radio" name="genero" value="2" required>
        <?php echo($genero === "2") ? 'checked="checked"' : ''; ?>Other
    <br> <br>
    <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    <label for="email">E-mail</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>
    <label for="email_confirm">Confirm email</label>
        <input type="email" name="email_confirm" value="<?php echo $emailConfirm; ?>" required><br><br>
    <label for="tel">Phone</label>
        <input type="" name="tel" value="" required><br><br>
    <label for="contrasena">Password</label>
        <input type="password" name="contrasena" value="">
    <label for="contrasena_confirm">Confirm password</label>
        <input type="password" name="contrasena_confirm" value="">
    <label for="avatar">Upload profile image</label>
        <input type="file" name="avatar" value="">

    <label> Fecha de Nacimiento</label>
        <select class="form-control" name="fnac_dia">
            <option value="">Día</option>
              <?php for($i = 1; $i <= 31; $i++) { ?>
                <option
                  value="<?php echo $i; ?>"
                  <?php echo($i == $dia) ? 'selected="selected"' : ''; ?>
                ><?php echo $i; ?></option>
              <?php } ?>
        </select>
        <select class="form-control" name="fnac_mes">
              <option value="">Mes</option>
              <?php foreach($meses as $numero => $nombre) { ?>
                <option
                  value="<?php echo $numero; ?>"
                  <?php echo($numero == $mes) ? 'selected="selected"' : ''; ?>
                ><?php echo $nombre;?></option>
              <?php } ?>
          </select>
          <select class="form-control" name="fnac_anio">
              <option value="">Año</option>
              <?php for($i = date('Y'); $i >= (date('Y') - 100); $i--) { ?>
                <option
                  value="<?php echo $i; ?>"
                  <?php echo($i == $anio) ? 'selected="selected"' : ''; ?>
                ><?php echo $i; ?></option>
              <?php } ?>
          </select>
          <label>
						<input type="checkbox"  name="terminos"> I agree with terms and conditions
					</label>
    <button type="reset" name="button">Clear</button>
    <button type="submit" name="button">Send</button>

</form>


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
