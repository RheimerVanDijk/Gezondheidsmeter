document.querySelector("#exitPopupButton").addEventListener("click", () => {
  document.querySelector("#popup").classList.remove("popopOpend");
});

function openPopup(days) {
  console.log(days);
  let header = `Oeps.. u bent ${days} ${
    days > 1 ? "dagen" : "dag"
  } vergeten in te vullen`;
  let text = `vul deze gelijk in door hier onder te klikken!`;

  document.querySelector(".vergetenHeader").innerHTML = header;
  document.querySelector(".vergetenText").innerHTML = text;

  document.querySelector("#popup").classList.add("popopOpend");
}
