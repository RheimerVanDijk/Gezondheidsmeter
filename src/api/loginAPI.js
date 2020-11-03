// events
if (checkElement("#loginBtn")) {
  document.querySelector("#loginBtn").addEventListener("click", () => {
    let email = document.querySelector("#loginEmail").value;
    email = email.toLowerCase();

    let password = document.querySelector("#loginPassword").value;

    login(email, password);
  });
}
// document.querySelector(".dashbaordPage").addEventListener("load",() =>{
//   console.log("hoi");
// }
// )

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

async function checkForgotten() {
  const form = new FormData();

  form.append("checkForgotten", "");

  const post = await fetch("src/importer.php", {
    method: "POST",
    body: form,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
      let lastDate = new Date(data.lastDate).toLocaleDateString();
      let dateTodat = new Date().toLocaleDateString();

      let diff = new Date(dateTodat).getTime() - new Date(lastDate).getTime();

      let diffDay = diff / (1000 * 3600 * 24);

      if (diffDay == 0) {
        // no lost days
      } else {
        openPopup(diffDay);
      }
    })
    .catch((error) => {
      console.log(error);
    });
}
checkForgotten();
