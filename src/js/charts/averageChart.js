if (checkElement(".dashbaordPage")) {
  ctx = document.querySelector("#averageChart").getContext("2d");

  let result = 2;
  let max = 10 - result;

  let color = colorPickerChart(result);

  let averageDonut = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Temperature in C°", "placeholder"],
      datasets: [
        {
          label: "temperature",
          data: [result, max],
          backgroundColor: color,
          borderColor: color,
          hoverBackgroundColor: color,
          hoverBorderColor: color,
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
