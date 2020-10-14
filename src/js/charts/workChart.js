getAwnsers(1, deployWorkChart, 4, "workChart");

function deployWorkChart(result) {
  if (checkElement(".dashbaordPage")) {
    let ctxWork = document.querySelector("#workChart").getContext("2d");

    document.querySelector("#workChartCenterGrade").innerHTML = result;

    let workResult = result;
    let workMax = 10 - workResult;

    let workColor = colorPickerChart(workResult);

    let workDonut = new Chart(ctxWork, {
      type: "doughnut",
      data: {
        labels: ["Temperature in C°", "placeholder"],
        datasets: [
          {
            label: "temperature",
            data: [workResult, workMax],
            backgroundColor: workColor,
            borderColor: workColor,
            hoverBackgroundColor: workColor,
            hoverBorderColor: workColor,
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
