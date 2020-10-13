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
