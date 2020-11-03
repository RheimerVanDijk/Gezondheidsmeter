// events
if (checkElement("#loginBtn")) {
  document.querySelector("#loginBtn").addEventListener("click", () => {
    let email = document.querySelector("#loginEmail").value;
    email = email.toLowerCase();

    let password = document.querySelector("#loginPassword").value;

    let loginEmail = document.querySelector(".login-email-error");
    let loginPassword = document.querySelector(".login-password-error");

    if (email == "" && password == "") {
      loginEmail.innerHTML = "Geen email ingevuld";
      loginPassword.innerHTML = "Geen wachtwoord ingevuld";
    } else if (email == "") {
      loginEmail.innerHTML = "Geen email ingevuld";
      loginPassword.innerHTML = "";
    } else if (password == "") {
      loginEmail.innerHTML = "";
      loginPassword.innerHTML = "Geen wachtwoord ingevuld";
    } else {
      login(email, password);
    }
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
      console.log(data);
      if (data.msg == "Kan gebruiker niet vinden") {
      } else {
        window.location.href = "Dashboard.php";
      }
    })
    .catch((error) => {
      console.log(error);
    });
}
