const validateForm = () => {
  var passwordEntered = document.querySelector("#password").value;
  var error = document.querySelector("#error");    
  var passwordError = document.querySelector("#passwordError");
  if (passwordEntered.length < 15) {
    passwordError.textContent = "Password must contain at least 15 characters";
    return false;
  } else if (!/[a-z]/.test(passwordEntered)) {
    passwordError.textContent = "Password must contain lowercase";
    return false;
  } else if (!/[A-Z]/.test(passwordEntered)) {
    passwordError.textContent = "Password must contain uppercase";
    return false;
  } else if (!/[0-9]/.test(passwordEntered)) {
    passwordError.textContent = "Password must contain numbers";
    return false;
  } else if (!/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(passwordEntered)
  ) {
    passwordError.textContent = "Password must contain symbols";
    return false;
  }
  passwordError.textContent = "";
  return true;
};

