<?php
?>

<div class="Border-vraag">
<div class="Hoofdtitel">
    <p>6.1 Slapen</p>
  </div>
  <p>Hoeveel uur heeft u geslapen en hoe is de nacht bevallen</p>
  <div>
    <input id="sleepHours" type="number">
    <div id="sleepState0" onclick="setSleepState(0)" class="sleepButton selected">
      <i class="far fa-smile" style="color: green;"> </i>
    </div>
    <div id="sleepState1" onclick="setSleepState(1)" class="sleepButton">
      <i class="far fa-meh" style="color: yellow;"> </i>
    </div>
    <div id="sleepState2" onclick="setSleepState(2)" class="sleepButton">
      <i class="far fa-frown" style="color: red;"> </i>
    </div>
    <div class="Button_question">
      <button id="saveSleepOne"> Opslaan</button>
    </div>
  </div>
</div>
