getAwnsers(2, deploySportChart, 2, "sportChart");

function deploySportChart(result) {
  if (checkElement(".dashbaordPage")) {
    let ctxSport = document.querySelector("#sportChart").getContext("2d");

    document.querySelector("#sportChartCenterGrade").innerHTML = result;

    let sportResult = result;
    let sportMax = 10 - sportResult;

    let sportColor = colorPickerChart(sportResult);

    let sportDonut = new Chart(ctxSport, {
      type: "doughnut",
      data: {
        labels: ["Temperature in C°", "placeholder"],
        datasets: [
          {
            label: "temperature",
            data: [sportResult, sportMax],
            backgroundColor: sportColor,
            borderColor: sportColor,
            hoverBackgroundColor: sportColor,
            hoverBorderColor: sportColor,
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
}
