window.addEventListener("load", function () {
  const addUserForm = document.getElementById("addUserForm");
  const showUsersBtn = document.getElementById("showUsersBtn");
  const usersList = document.getElementById("usersList");

  addUserForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(addUserForm);
    const response = await fetch("http://localhost:8000/api.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: formData,
    });

    const result = await response.json();
    alert(result.message);
    addUserForm.reset();
  });

  showUsersBtn.addEventListener("click", async () => {
    const response = await fetch("http://localhost:8000/api.php", {
      method: "GET",
    });

    const users = await response.json();

    usersList.innerHTML = "";

    users.forEach((user) => {
      const userDiv = document.createElement("div");
      userDiv.textContent = `Name: ${user.name}, Email: ${user.email}`;
      usersList.appendChild(userDiv);
    });
  });
});
