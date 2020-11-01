document.querySelector("#nextDrugsOne").addEventListener("click", () => {
  const points = parseInt(
    document.querySelector('input[name="drugs"]:checked').value
  );
  awnserQuestion(10, points);
});
