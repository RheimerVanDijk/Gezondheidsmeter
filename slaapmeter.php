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
    <div class="desk-menu">
      <div class="rechts">
        <a href="Dashboard.php">Dashboard | </a>
        <a href="vragenlijst.php">Vragenlijst | </a>
        <a class="active" href="slaapmeter.php">Slaapmeter</a> |
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <div class="mobile-menu">
      <div class="rechts">
        <i class="fas fa-bars fa-2x" onclick="dropdown_menu()"></i>
      </div>
    </div>
    <div class="mobile-nav" id="mobile_id">
      <div class="divider">
        <a href="Dashboard.php">Dashboard</a>
      </div>
      <div class="divider">
        <a href="vragenlijst.php">Vragenlijst</a>
      </div>
      <div class="divider">
        <a class="active" href="slaapmeter.php">Slaapmeter</a>
      </div>
      <div class="divider">
        <a href="logout.php">Logout</a>
      </div>
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
