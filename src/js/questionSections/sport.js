let calPUArray = [704, 633, 563, 246, 704, 704];

document.querySelector("#sportCalc").addEventListener("click", () => {
  if (document.querySelector("#sportRadioNo").checked) {
    awnserQuestion(5, 4);
  } else {
    const sportUren = document.querySelector("#sportUren").value;
    const selectedIndex = document.querySelector("#sportCategories")
      .selectedIndex;
    const totalCal = sportUren * calPUArray[selectedIndex];

    if (totalCal <= 500) {
      awnserQuestion(5, 1);
    } else if (totalCal <= 1000) {
      awnserQuestion(5, 2);
    } else if (totalCal > 1000) {
      awnserQuestion(5, 3);
    }
  }
});

document.querySelector("#walkCalc").addEventListener("click", () => {
  if (document.querySelector("#walkRadioNo").checked) {
    awnserQuestion(6, 4);
  } else {
    const walkMin = document.querySelector("#walkMin").value;

    const totalCal = walkMin * 3.5; // gemiddeld 3.5 cal per minuut tijdens het lopen of fietsen

    if (totalCal <= 35) {
      awnserQuestion(6, 1);
    } else if (totalCal <= 120) {
      awnserQuestion(6, 2);
    } else if (totalCal > 120) {
      awnserQuestion(6, 3);
    }
  }
});

function sportChange(value) {
  if (value) {
    document.querySelector("#sportMenu").classList.remove("hidden");
  } else {
    document.querySelector("#sportMenu").classList.add("hidden");
  }
}

function walkChange(value) {
  if (value) {
    document.querySelector("#walkMenu").classList.remove("hidden");
  } else {
    document.querySelector("#walkMenu").classList.add("hidden");
  }
}
