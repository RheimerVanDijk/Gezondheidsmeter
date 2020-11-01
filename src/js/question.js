let questionCounter = 1;
let awnsersArray = [];

showQuestion(questionCounter);

document.querySelector("#nextQuestion").addEventListener("click", () => {
  hideAllQuestions();
  showQuestion(questionCounter);
});

function hideAllQuestions() {
  let elements = document.querySelectorAll(".question");

  elements.forEach((element) => {
    if (!element.classList.contains("hidden")) {
      element.classList.add("hidden");
    }
  });
}

function showQuestion(number) {
  document.querySelector(`[data-q="${number}"]`).classList.remove("hidden");
  questionCounter++;
}

function awnserQuestion(questionID, points) {
  awnsersArray.push({ questionID: questionID, puntenID: points });
  hideAllQuestions();
  console.log(awnsersArray);

  showQuestion(questionCounter);
}
