let mail = document.querySelector("email");
let password = document.querySelector("password");
const btnEnvoi = document.querySelector("#btn");

const regexPwd = `/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@$%^&(){}[]:;<>,.?/~_+-=|\]).{8,32}$/`;

password.addEventListener("keyup", () => {
  if (password.matches(regegPwd)) {
  }
});
