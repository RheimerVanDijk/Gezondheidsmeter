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
      <ul></ul>
    </div>
  </nav>
  <div class="content">
    <img class="background" src="src/images/background_image.jpg" alt="">
    <div class="container container-center">
        <div class="registerCard">
          <div class="title">
            <p>Registreren bij de gezondheid meter</p>
          </div>
          <form>
            <div class="input-group">
              <label for="registerEmail">E-mailadres:</label>
              <input id="registerEmail" type="email" name="email" placeholder="E-mailadres">
            </div>
            <div class="input-group">
              <label for="fullName">Volledige naam:</label>
              <input id="fullName" type="text" name="username" placeholder="Volledige naam">
            </div>
            <div class="input-group">
              <label for="registerPassword">Wachtwoord:</label>
              <input id="registerPassword" type="password" name="password_1" placeholder="Wachtwoord">
            </div>
            <div class="input-group">
              <label for="VerifyPassword">Bevestig wachtwoord:</label>
              <input id="VerifyPassword" type="password" name="password_2" placeholder="Bevestig wachtwoord">
            </div>
            <div class="button-container">
              <button id="register" type="button" name="login" class="btn">Registreren</button>
              <a href="login.php"><button type="button" name="login" class="btn">Inloggen</button></a>
            </div>
          </form>
        </div>
    </div>
  </div>

<?php require_once('src/layout/footer.php') ?>
