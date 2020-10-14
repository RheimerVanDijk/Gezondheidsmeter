getAwnsers(3, deployFoodChart, 2, "foodChart");

function deployFoodChart(result) {
  if (checkElement(".dashbaordPage")) {
    let ctxFood = document.querySelector("#foodChart").getContext("2d");

    let foodResult = result;
    let foodMax = 10 - foodResult;

    let foodColor = colorPickerChart(foodResult);

    let foodDonut = new Chart(ctxFood, {
      type: "doughnut",
      data: {
        labels: ["Temperature in C°", "placeholder"],
        datasets: [
          {
            label: "temperature",
            data: [foodResult, foodMax],
            backgroundColor: foodColor,
            borderColor: foodColor,
            hoverBackgroundColor: foodColor,
            hoverBorderColor: foodColor,
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
