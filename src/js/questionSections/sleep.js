// 0 = goed (3)
// 1 = oke (2)
// 2 = slecht (1)

let sleepState = 0;

function setSleepState(state) {
  sleepState = state;
  deselectSleepState();
  document.querySelector(`#sleepState${state}`).classList.add("selected");
}

function deselectSleepState() {
  document.querySelectorAll(".sleepButton").forEach((Element) => {
    Element.classList.remove("selected");
  });
}

document.querySelector("#saveSleepOne").addEventListener("click", () => {
  let totalPoints = 0;
  let sleepPoints = 0;
  let sleepMoodPoints = 0;
  let sleepHours = parseInt(document.querySelector("#sleepHours").value);

  if (sleepHours < 6) {
    sleepPoints = 1;
  } else if (sleepHours <= 8) {
    sleepPoints = 3;
  } else if (sleepHours > 8) {
    sleepPoints = 2;
  }

  if (sleepState == 0) {
    sleepMoodPoints = 3;
  } else if (sleepState == 1) {
    sleepMoodPoints = 2;
  } else if (sleepState == 2) {
    sleepMoodPoints = 1;
  }

  totalPoints = Math.round((sleepPoints + sleepMoodPoints) / 2);

  saveSleep([{ questionID: 11, puntenID: totalPoints }]);
});
