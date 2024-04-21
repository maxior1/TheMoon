document.getElementById("showPasswordCheckbox").addEventListener("change", function() {
    var passwordField = document.getElementById("passwordField");
    var repeatPasswordField = document.getElementById("repeatPasswordField");
    if (this.checked) {
      passwordField.type = "text";
      repeatPasswordField.type = "text";
    } else {
      passwordField.type = "password";
      repeatPasswordField.type = "password";
    }
  });

  // Function to check if passwords match
  function checkPasswordsMatch() {
    var passwordField = document.getElementById("passwordField").value;
    var repeatPasswordField = document.getElementById("repeatPasswordField").value;
    var passwordMatchMessage = document.getElementById("passwordMatchMessage");
    var passwordWarning = document.getElementById("passwordWarning");

    if (passwordField !== repeatPasswordField) {
      passwordMatchMessage.style.display = "none";
      passwordWarning.style.display = "block";
    } else {
      passwordMatchMessage.style.display = "block";
      passwordWarning.style.display = "none";
    }
  }

  // Adding event listeners for input fields
  document.getElementById("passwordField").addEventListener("input", checkPasswordsMatch);
  document.getElementById("repeatPasswordField").addEventListener("input", checkPasswordsMatch);