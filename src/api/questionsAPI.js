document.querySelector("#saveQuestions").addEventListener("click", () => {
  saveResults();
});

async function saveResults() {
  const form = new FormData();

  form.append("saveResults", "");
  form.append("awnsersObject", JSON.stringify(awnsersArray));

  awnsersArray = [];

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      window.location.href = "Dashboard.php";
    })

    .catch((error) => {
      console.log(error);
    });
}

async function saveSleep(awnserObject) {
  const form = new FormData();

  form.append("saveResults", "");
  form.append("awnsersObject", JSON.stringify(awnserObject));

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      window.location.href = "Dashboard.php";
    })
    .catch((error) => {
      console.log(error);
    });
}
