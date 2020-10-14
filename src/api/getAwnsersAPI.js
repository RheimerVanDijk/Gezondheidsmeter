async function getAwnsers(questionID) {
  const form = new FormData();

  form.append("getAwnsers", "");
  form.append("questionID", questionID);

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
    })
    .catch((error) => {
      console.log(error);
    });
}
