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
      <li>
        <a href="Dashboard.php">Annuleren</a>
      </li>
    </ul>
    </div>
  </nav>
  <div class="content">
    <img class="background" src="src/images/background_image.jpg" alt="">
    <div class="container container-center">
      <div class="questionCard">
        <div data-q="1" class="sleepQuestion">
          <?php require_once('src/vragen/slaap/vraag1.php') ?>
        </div>
      </div>
    </div>
  </div>

<?php require_once('src/layout/footer.php') ?>
