<?php
?>

<div>
  <p>6.1 Slapen</p>
  <p>Hoeveel uur heeft u geslapen en hoe is de nacht bevallen</p>
  <div>
    <input id="sleepHours" type="number">
    <div id="sleepState0" onclick="setSleepState(0)" class="sleepButton selected">
      <i class="far fa-smile"></i>
    </div>
    <div id="sleepState1" onclick="setSleepState(1)" class="sleepButton">
      <i class="far fa-meh"></i>
    </div>
    <div id="sleepState2" onclick="setSleepState(2)" class="sleepButton">
      <i class="far fa-frown"></i>
    </div>
    <button id="saveSleepOne">Opslaan</button>
  </div>
</div>
