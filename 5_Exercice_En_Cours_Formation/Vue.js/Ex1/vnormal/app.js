let leInput = document.querySelector('input');
let leButton = document.querySelector('button');
let laList = document.querySelector('ul');

leButton.addEventListener('click', function addTask() {
  let ligne = document.createElement('li');
  ligne.textContent = leInput.value;
  laList.appendChild(ligne);
  leInput.value = '';
});
