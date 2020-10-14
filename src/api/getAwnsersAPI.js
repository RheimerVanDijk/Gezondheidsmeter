async function getAwnsers(sectionID, testFunc, totalQuestions, name) {
  const form = new FormData();

  form.append("getAwnsers", "");
  form.append("sectionID", sectionID);

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      testFunc(calcAverage(data, totalQuestions, name));
    })
    .catch((error) => {
      console.log(error);
    });
}

async function getAllAwnsers(testFunc) {
  const form = new FormData();

  form.append("getAllAwnsers", "");

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      // console.log(calcAllAverage(data));
      testFunc(calcAllAverage(data));
    })
    .catch((error) => {
      console.log(error);
    });
}
