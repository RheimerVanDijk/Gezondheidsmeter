let ctxSleep = document.querySelector("#sleepChart").getContext("2d");

let sleepResult = 6;
let sleepMax = 10 - sleepResult;

let sleepColor = colorPickerChart(sleepResult);

let sleepDonut = new Chart(ctxSleep, {
  type: "doughnut",
  data: {
    labels: ["Temperature in C°", "placeholder"],
    datasets: [
      {
        label: "temperature",
        data: [sleepResult, sleepMax],
        backgroundColor: sleepColor,
        borderColor: sleepColor,
        hoverBackgroundColor: sleepColor,
        hoverBorderColor: sleepColor,
      },
    ],
  },
  options: {
    legend: {
      display: false,
    },
    tooltips: {
      enabled: false,
    },
    maintainAspectRatio: false,
    responsive: false,
    cutoutPercentage: 80,
    rotation: 1 * Math.PI,
    circumference: 0.995 * Math.PI,
    ticks: {
      beginAtZero: true,
      max: 10,
    },
  },
});
