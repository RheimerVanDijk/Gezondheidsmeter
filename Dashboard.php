<?php
  if (!isset($_SESSION)) session_start();
  require_once('src/layout/header.php');

  if ($_SESSION['loggedIn']) {
?>
  <nav>
    <div class="links">
      <i class="fas fa-apple-alt"></i>
      <p>Gezondheids meter</p>
    </div>
    <div class="rechts">
      <a href="vragenlijst.php">vragenlijst</a>
      <a href="slaapmeter.php">slaapmeter</a>
      <a href="logout.php">logout</a>
    </div>
  </nav>
  <div class="content dashbaordPage">
    <img class="background" src="src/images/background_image.jpg" alt="">
    <div class="container container-left ">
      <div class="header">
        <p>Welkom terug <?php echo $_SESSION['username'] ?></p>
        <div class="line"></div>
      </div>
      <div class="colors">
        <div class="bad">
          <div class="box"></div>
          <p>Slecht</p>
        </div>
        <div class="mwah">
          <div class="box"></div>
          <p>Kan beter</p>
        </div>
        <div class="better">
          <div class="box"></div>
          <p>Beter</p>
        </div>
        <div class="good">
          <div class="box"></div>
          <p>Goed</p>
        </div>
      </div>
      <div class="chart-section">
        <div class="title">
          <p>Gemiddelde van alle onderdelen</p>
        </div>
        <div class="chart">
          <canvas id="averageChart" width="200" height="200"></canvas>
          <div id="averageChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
      <div class="chart-section">
        <div class="title">
          <p>1. Arbeids omstandigheden</p>
        </div>
        <div class="chart">
          <canvas id="workChart" width="200" height="200"></canvas>
          <div id="workChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
      <div class="chart-section">
        <div class="title">
          <p>2. Sport en beweging</p>
        </div>
        <div class="chart">
          <canvas id="sportChart" width="200" height="200"></canvas>
          <div id="sportChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
      <div class="chart-section">
        <div class="title">
          <p>3. Voeding</p>
        </div>
        <div class="chart">
          <canvas id="foodChart" width="200" height="200"></canvas>
          <div id="foodChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
      <div class="chart-section">
        <div class="title">
          <p>4. Alcohol</p>
        </div>
        <div class="chart">
          <canvas id="alcoholChart" width="200" height="200"></canvas>
          <div id="alcoholChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
      <div class="chart-section">
        <div class="title">
          <p>5. Drugs</p>
        </div>
        <div class="chart">
          <canvas id="drugsChart" width="200" height="200"></canvas>
          <div id="drugsChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
      <div class="chart-section">
        <div class="title">
          <p>6. Slaap</p>
        </div>
        <div class="chart">
          <canvas id="sleepChart" width="200" height="200"></canvas>
          <div id="sleepChartCenterGrade" class="centerGrade"></div>
          <div class="text">
            <p>0</p>
            <p>10</p>
          </div>
        </div>
      </div>
      <div class="removeAccount">
        <a><button>Account verwijderen</button></a>
      </div>
    </div>
  </div>
<?php
  } // end tag for line: 5

  require_once('src/layout/footer.php')
?>
