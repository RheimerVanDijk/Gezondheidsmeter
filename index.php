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
        <a class="active" href="index.php">Home</a> |  
        <a href="login.php">Login</a>
      </li>
    </ul>
    </div>
  </nav>
  <div class="content">
    <div class="top homepage-header">
      <div class="header-info">
        <h2>Doe ook mee <br> aan het landelijke <br> <span>gezondheids</span> onderzoek!</h2>
        <a href="#">Lees meer!</a>
      </div>
      <div>
        <img src="src/images/background_image.jpg" alt="">
      </div>
    </div>
    <div class="content-container-home">
      <div class="text-box-home">
        <h3>Wat houdt dit onderzoek in.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="text-box-home">
        <h3>Wat houdt dit onderzoek in.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>

<?php require_once('src/layout/footer.php') ?>
