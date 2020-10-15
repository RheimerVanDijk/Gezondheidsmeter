document.querySelector("#deleteAccountButton").addEventListener("click", () => {
  console.log("tset");
  removeAccount();
});

async function removeAccount() {
  let form = new FormData();

  form.append("deleteAccount", "");

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
