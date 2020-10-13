// events

if (checkElement("#register")) {
  document.querySelector("#register").addEventListener("click", () => {
    let email = document.querySelector("#registerEmail").value;
    email = email.toLowerCase();
    const fullName = document.querySelector("#fullName").value;
    const password = document.querySelector("#registerPassword").value;
    const verifyPassword = document.querySelector("#VerifyPassword").value;

    if (email != "" && fullName != "" && password === verifyPassword) {
      register(email, fullName, password);
    }
  });
}

// fetch api

async function register(email, fullName, password) {
  const form = new FormData();
  let newDate = getFullDate();

  form.append("register", "");
  form.append("email", email);
  form.append("username", fullName);
  form.append("password", password);
  form.append("date", newDate);

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
      //popupController(data);
    })
    .catch((error) => {
      console.log(error);
    });
}
