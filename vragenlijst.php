<?php
  if (!isset($_SESSION)) session_start();
  require_once('src/layout/header.php');
?>

  <nav>
    <div class="links">
      <i class="fas fa-apple-alt"></i>
      <p>Gezondheids meter</p>
    </div>
    <div class="desk-menu">
      <div class="rechts">
        <a href="Dashboard.php">Dashboard</a> |
        <a class="active" href="vragenlijst.php">Vragenlijst</a> |
        <a href="slaapmeter.php">Slaapmeter | </a>
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
        <a class="active" href="vragenlijst.php">Vragenlijst</a>
      </div>
      <div class="divider">
        <a href="slaapmeter.php">Slaapmeter</a>
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
        <div data-q="1" class="question hidden">
          <?php require_once('src/vragen/werk/vraag1.php') ?>
        </div>
        <div data-q="2" class="question hidden">
          <?php require_once('src/vragen/werk/vraag2.php') ?>
        </div>
        <div data-q="3" class="question hidden">
          <?php require_once('src/vragen/werk/vraag3.php') ?>
        </div>
        <div data-q="4" class="question hidden">
          <?php require_once('src/vragen/werk/vraag4.php') ?>
        </div>
        <div data-q="5" class="question hidden">
          <?php require_once('src/vragen/sport/vraag1.php') ?>
        </div>
        <div data-q="6" class="question hidden">
          <?php require_once('src/vragen/sport/vraag2.php') ?>
        </div>
        <div data-q="7" class="question hidden">
          <?php require_once('src/vragen/eten/vraag1.php') ?>
        </div>
        <div data-q="8" class="question hidden">
          <?php require_once('src/vragen/eten/vraag2.php') ?>
        </div>
        <div data-q="9" class="question hidden">
          <?php require_once('src/vragen/alcohol/vraag1.php') ?>
        </div>
        <div data-q="10" class="question hidden">
          <?php require_once('src/vragen/drugs/vraag1.php') ?>
        </div>
        <div data-q="11" class="question hidden">
          <?php require_once('src/vragen/end/end1.php') ?>
        </div>
      </div>
    </div>
  </div>

<?php require_once('src/layout/footer.php') ?>
