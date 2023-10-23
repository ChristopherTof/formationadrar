// Récupération des élément du DOM
const body = document.querySelector('body');
const tasks = document.querySelector('#tasks');

//Création de paragraphe au clic
function addTask() {
  // Ajout d'un paragraphe et de son contenu
  const taskValue = document.querySelector('#task').value;

  const para = document.createElement('p');

  //Partie Bonus
  const divBonus = document.createElement('div');
  divBonus.setAttribute('class', 'container');
  tasks.appendChild(divBonus);
  para.textContent = taskValue;
  divBonus.appendChild(para);

  document.querySelector('#task').value = '';

  //Creation bouton suppression
  const btnDel = document.createElement('button');
  divBonus.appendChild(btnDel);
  btnDel.setAttribute('onClick', 'deleteTask(this)');
  btnDel.setAttribute('id', 'delete');
  btnDel.textContent = 'Supprimer';

  //Creation bouton update
  const btnUpdate = document.createElement('button');
  divBonus.appendChild(btnUpdate);
  btnUpdate.setAttribute('onClick', 'updateTask(this)');
  btnUpdate.setAttribute('id', 'update');
  btnUpdate.textContent = 'Update';
}
//Suppression des paragraphe
function delAllTask() {
  const supPara = document.querySelector('#tasks');
  while (supPara.firstChild) {
    // tant que tasks a un 1er enfant
    supPara.removeChild(supPara.firstChild); // tu supprime le premier
  }
}

//Recherger la page
function reload() {
  location.reload();
}

// BONUS
function deleteTask(btn) {
  target = btn.parentNode;
  target.remove(btn);
}

function updateTask(btn) {
  target = document.querySelector('container').nextSibling;
  console.log(target);
}
