document.querySelector("#nextFoodOne").addEventListener("click", () => {
  awnserQuestion(7, calcS5());
});

document.querySelector("#nextFoodTwo").addEventListener("click", () => {
  const result = calcAlcohol();
  console.log(result);
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
  maxScoreNormal = 9;
  maxScoreAlcohol = 3;
  alcoholScore = 0;
  const suiker = parseInt(
    document.querySelector('input[name="suiker"]:checked').value
  );
  const cafeine = parseInt(
    document.querySelector('input[name="cafeine"]:checked').value
  );
  const alcohol = parseInt(
    document.querySelector('input[name="alcohol"]:checked').value
  );
  const water = parseInt(
    document.querySelector('input[name="water"]:checked').value
  );

  let score = maxScoreNormal - (suiker + cafeine + water);
  let finalNormal;

  if (score <= 2) {
    finalNormal = 1;
  } else if (score <= 4) finalNormal = 2;
  else if (score <= 6) finalNormal = 3;

  if (maxScoreAlcohol - alcohol == 0) {
    alcoholScore = 4;
  } else if (maxScoreAlcohol - alcohol == 1) {
    alcoholScore = 1;
  } else if (maxScoreAlcohol - alcohol == 2) {
    alcoholScore = 2;
  } else if (maxScoreAlcohol - alcohol == 3) {
    alcoholScore = 3;
  }

  return [finalNormal, alcoholScore];
}
