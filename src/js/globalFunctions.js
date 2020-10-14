function getFullDate() {
  let date = new Date();
  let newDate = `${date.getFullYear()}-${date.getMonth()}-${date.getDay()} ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;

  return newDate;
}

function checkElement(element) {
  if (document.querySelector(element)) {
    return true;
  }
}

function colorPickerChart(result) {
  if (result < 2.5 && result >= 0) {
    return ["rgb(235, 97, 97)", "rgb(229, 228, 224)"];
  } else if (result < 5 && result >= 2.5) {
    return ["rgb(255, 161, 67)", "rgb(229, 228, 224)"];
  } else if (result < 7.5 && result >= 5) {
    return ["rgb(131, 230, 131)", "rgb(229, 228, 224)"];
  } else if (result <= 10 && result >= 7.5) {
    return ["rgb(92, 155, 92)", "rgb(229, 228, 224)"];
  }
}

function calcAverage(awnsersArray, questionAmount, name) {
  let maxPoints = 0;
  let totalPoints = 0;
  let totalAwnsers = 0;
  let totalQuestions = questionAmount;
  let maxGrade = 10;
  let pointWorth = 0;
  let grade = 0;
  awnsersArray[0].forEach((element) => {
    totalPoints += parseInt(element.points);
    totalAwnsers++;
    maxPoints += 3;
  });
  pointWorth = maxGrade / maxPoints;
  grade = pointWorth * totalPoints;
  fixedGrade = grade.toFixed(1);

  // console.log(name + "---------------------------------------");
  // console.log("maxPoints: " + maxPoints);
  // console.log("totalPoints: " + totalPoints);
  // console.log("totalAwnsers: " + totalAwnsers);
  // console.log("totalQuestions: " + totalQuestions);
  // console.log("maxGrade: " + maxGrade);
  // console.log("1 point worth: " + pointWorth);
  // console.log("grade: " + grade);
  // console.log("fixed grade: " + fixedGrade);

  return fixedGrade;
}

function calcAllAverage(awnsersArray) {
  let maxPoints = 0;
  let totalPoints = 0;
  let maxGrade = 10;
  let pointWorth = 0;
  let grade = 0;
  let totalAwnsers = 0;

  awnsersArray[0].forEach((element) => {
    totalPoints += parseInt(element.points);
    totalAwnsers++;
    maxPoints += 3;
  });
  pointWorth = maxGrade / maxPoints;
  grade = pointWorth * totalPoints;
  fixedGrade = grade.toFixed(1);

  return fixedGrade;
}
