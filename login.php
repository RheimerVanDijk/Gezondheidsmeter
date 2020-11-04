<?php
  if (!isset($_SESSION)) session_start();
  require_once('src/layout/header.php');
?>

  <nav>
    <div class="links">
      <i class="fas fa-apple-alt"></i>
      <p>Gezondheids meter</p>
    </div>
    <div class="rechts">
      <ul>
        <li>
          <a href="index.php">Home | </a> 
          <a class="active" href="index.php">Login </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content">
    <img class="background" src="src/images/background_image.jpg" alt="">
    <div class="container container-center">
      <div class="loginCard">
        <div class="title">
          <p>Login bij de gezondheid meter</p>
        </div>
        <form class="login-form">
          <div class="input-group">
            <label for="loginEmail">E-mailadres:</label>
            <input id="loginEmail" type="text" placeholder="E-mailadres" required>
          </div>
          <div class="input-group">
            <label for="loginPassword">Wachtwoord:</label>
            <input id="loginPassword" type="password" placeholder="Wachtwoord" required>
          </div>
          <div class="button-container">
            <div>
              <button class="login-btn" id="loginBtn" type="button" name="login" class="btn">Inloggen</button>
            </div>
            <div>
              <a class="reg-btn" href="register.php"><button type="button" name="login" class="btn">Registreren</button></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php require_once('src/layout/footer.php') ?>
