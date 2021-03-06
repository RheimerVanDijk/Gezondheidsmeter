getAwnsers(5, deployDrugsChart, 1, "drugsChart");

function deployDrugsChart(result) {
  if (checkElement(".dashbaordPage")) {
    let ctxDrugs = document.querySelector("#drugsChart").getContext("2d");

    document.querySelector("#drugsChartCenterGrade").innerHTML = result;

    let drugsResult = result;
    let drugsMax = 10 - drugsResult;

    let drugsColor = colorPickerChart(drugsResult);

    let drugsDonut = new Chart(ctxDrugs, {
      type: "doughnut",
      data: {
        labels: ["Temperature in C°", "placeholder"],
        datasets: [
          {
            label: "temperature",
            data: [drugsResult, drugsMax],
            backgroundColor: drugsColor,
            borderColor: drugsColor,
            hoverBackgroundColor: drugsColor,
            hoverBorderColor: drugsColor,
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
