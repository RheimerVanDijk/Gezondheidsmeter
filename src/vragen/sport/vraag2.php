<?php
?>

<div>
  <p>2.2 Sport en beweging</p>
  <p>Heeft u vandaag gefietst en/of gewandeld?</p>
  <div>
    <input type="radio" id="ja" name="sport1" value="ja" onchange="walkChange(true)">
    <label for="ja">Ja</label><br>
    <input type="radio" id="walkRadioNo" name="sport1" value="nee" onchange="walkChange(false)" checked>
    <label for="nee">Nee</label><br>
  </div>
  <div id="walkMenu" class="hidden">
    <input id="walkMin" type="number" placeholder="aantal minuten">
  </div>
  <button id="walkCalc">Volgende</button>
</div>
