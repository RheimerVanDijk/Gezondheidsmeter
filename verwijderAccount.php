<?php
  if (!isset($_SESSION)) session_start();
  require_once('src/layout/header.php');
  $_SESSION["test"] = "gay"
?>

  <nav>
    <div class="links">
      <i class="fas fa-apple-alt"></i>
      <p>Gezondheids meter</p>
    </div>
    <div class="rechts">
    <ul>
      <li></li>
    </ul>
    </div>
  </nav>
  <div class="content">
    <img class="background" src="src/images/background_image.jpg" alt="">
    <div class="container container-center">
      <div class="removeAccount_del">
        <p>Weet u zeker dat u uw account wilt verwijderen?</p> <br>
        <div class="con_del">
          
          <p>(alle gegevens die we over u hebben worden verwijderd)</p> <br>
          <div class="Button_question_del" >
            <button id="deleteAccountButton">Verwijderen</button>
          </div>
          <div class="button_anu">
            <a href="Dashboard.php">Annuleren</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once('src/layout/footer.php') ?>
