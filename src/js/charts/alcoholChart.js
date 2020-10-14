if (checkElement(".dashbaordPage")) {
  let ctxAlcohol = document.querySelector("#alcoholChart").getContext("2d");

  let alcoholResult = 6;
  let alcoholMax = 10 - alcoholResult;

  let alcohCololor = colorPickerChart(alcoholResult);

  let alcoholDonut = new Chart(ctxAlcohol, {
    type: "doughnut",
    data: {
      labels: ["Temperature in C°", "placeholder"],
      datasets: [
        {
          label: "temperature",
          data: [alcoholResult, alcoholMax],
          backgroundColor: alcohCololor,
          borderColor: alcohCololor,
          hoverBackgroundColor: alcohCololor,
          hoverBorderColor: alcohCololor,
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
}
