const password = document.querySelector('#password');
const mail = document.querySelector('#email');
const error = document.querySelector('#error');
const btn = document.querySelector('#btn');
let regexPwd = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{12,20}$/;
let regexMail =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
// password.addEventListener('keyup', () => {
//   console.log(password);
//   if (password.value.match(regexPwd)) {
//     password.style.backgroundColor = 'green';
//   } else {
//     password.style.backgroundColor = 'red';
//   }
// });

// mail.addEventListener('blur', () => {
//   if (email.value.match(regexMail)) {
//     email.style.backgroundColor = 'green';
//   } else {
//     email.style.backgroundColor = 'red';
//   }
// });

btn.addEventListener('click', () => {
  if (regexMail.test(mail.value) && regexPwd.test(password.value)) {
    console.log('ok');
    mail.style.backgroundColor = 'green';
    password.style.backgroundColor = 'green';
    error.textContent = 'Tout est Okayy';
  } else if (regexMail.test(mail.value)) {
    mail.style.backgroundColor = 'green';
    password.style.backgroundColor = 'red';
    error.textContent = 'Mdp Incorrect';
  } else if (regexPwd.test(password.value)) {
    mail.style.backgroundColor = 'red';
    password.style.backgroundColor = 'green';
    error.textContent = 'Mail Invalide';
  } else {
    mail.style.backgroundColor = 'red';
    password.style.backgroundColor = 'red';
    error.textContent = 'Mail et/ou Mot de passe Invalide';
  }
});
