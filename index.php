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
        <p>Dit is een onderzoek om er achter te komen hoe de gezondheid er voor staat in Nederland. 
          Dit word gedaan door een aantal vragen per dan te beantwoorden voor een paar maanden. 
          Na het beantwoorden van deze vragen word er een gemiddelde getoont in de form van een cijfer en grafiek. 
          Hier naast is de gemiddelde gezondheidscijfer te zien van de tot nu toe ingevulde vragen.
        </p>
      </div>
      <div class="text-box-home chart-section">
        <h3>Wat houdt dit onderzoek in?</h3>
        <p>Gemiddelde gezondheids cijfers voor Nederland.</p>
        <div class="chart">
          <canvas id="homeChart" width="200" height="200"></canvas>
          <div id="homeChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once('src/layout/footer.php') ?>
