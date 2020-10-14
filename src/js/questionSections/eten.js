document.querySelector("#nextFoodOne").addEventListener("click", () => {
  awnserQuestion(7, calcS5());
});

document.querySelector("#nextFoodTwo").addEventListener("click", () => {
  const result = calcAlcohol();
  awnserQuestion(8, result[0]);
  awnserQuestion(9, result[1]);
});

function calcS5() {
  const s1 = document.querySelector("#s5zuivel").checked
    ? document.querySelector("#s5zuivel").value
    : 0;

  const s2 = document.querySelector("#s5gfa").checked
    ? document.querySelector("#s5gfa").value
    : 0;

  const s3 = document.querySelector("#s5denP").checked
    ? document.querySelector("#s5denP").value
    : 0;

  const s4 = document.querySelector("#s5vetten").checked
    ? document.querySelector("#s5vetten").value
    : 0;

  const s5 = document.querySelector("#s5GenG").checked
    ? document.querySelector("#s5GenG").value
    : 0;

  const final =
    parseInt(s1) + parseInt(s2) + parseInt(s3) + parseInt(s4) + parseInt(s5);

  if (final == 5) {
    return 3;
  } else if (final == 4) {
    return 2;
  } else if (final == 3) {
    return 1;
  } else if (final < 3) {
    return 4;
  }
}

function calcAlcohol() {
  maxScoreNormal = 6;
  maxScoreAlcohol = 3;
  const suiker = parseInt(
    document.querySelector('input[name="suiker"]:checked').value
  );
  const cafeine = parseInt(
    document.querySelector('input[name="cafeine"]:checked').value
  );
  const alcohol = parseInt(
    document.querySelector('input[name="alcohol"]:checked').value
  );

  let score = maxScoreNormal - (suiker + cafeine);
  let finalNormal;

  if (score <= 2) {
    finalNormal = 1;
  } else if (score <= 4) finalNormal = 2;
  else if (score <= 6) finalNormal = 3;

  return [finalNormal, maxScoreAlcohol - alcohol];
}
