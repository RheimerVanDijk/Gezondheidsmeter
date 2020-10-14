<?php
?>

<div>
  <p>2.1 Sport en beweging</p>
  <p>Heeft u vandaag gesport?</p>
  <div>
    <input type="radio" id="ja" name="sport1" value="ja" onchange="sportChange(true)">
    <label for="ja">Ja</label><br>
    <input type="radio" id="sportRadioNo" name="sport1" value="nee" onchange="sportChange(false)">
    <label for="nee">Nee</label><br>
  </div>
  <div id="sportMenu" class="hidden">
    <p>Kies 1 van de onderstaande sport categorien en vul in hoeveel uur je hebt gesport</p>
    <select name="sportCategories" id="sportCategories">
      <option value="Atletiek">Atletiek</option>
      <option value="Balsport">Balsport</option>
      <option value="Krachtsport">Krachtsport</option>
      <option value="Paardensport">Paardensport</option>
      <option value="Vechtsport">Vechtsport</option>
      <option value="Watersport">Wielersport</option>
    </select>
    <input id="sportUren" type="number" placeholder="aantal uren">
  </div>
  <button id="sportCalc">Volgende</button>
</div>
