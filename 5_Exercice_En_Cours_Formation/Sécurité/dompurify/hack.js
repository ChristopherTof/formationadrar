import DOMPurify from 'dompurify';

let userInput = document.querySelector('#exampleFormControlInput1');
let button = document.querySelector('button');

userInput.value = '<script>alert("XSS Attack!");</script>';

button.addEventListener('click', () => {
  console.log('AVANT DOMPURIFY : ' + userInput.value);

  const clean = DOMPurify.sanitize(userInput.value);

  console.log('APRES DOMPURIFY : ' + clean);
});
