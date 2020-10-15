// events
if (checkElement("#loginBtn")) {
  document.querySelector("#loginBtn").addEventListener("click", () => {
    let email = document.querySelector("#loginEmail").value;
    email = email.toLowerCase();

    let password = document.querySelector("#loginPassword").value;

    login(email, password);
  });
}

// fetch api

async function login(email, password) {
  const form = new FormData();

  form.append("login", "");
  form.append("username", email);
  form.append("password", password);

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      window.location.href = "Dashboard.php";
    })
    .catch((error) => {
      console.log(error);
    });
}
