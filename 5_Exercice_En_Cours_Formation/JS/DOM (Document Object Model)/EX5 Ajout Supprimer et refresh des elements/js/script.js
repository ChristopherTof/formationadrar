// Récupération des élément du DOM
const body = document.querySelector('body');
const tasks = document.querySelector('#tasks');

//Création de la clé de Local Storage

//Création de paragraphe au clic
function addTask() {
  // Ajout d'un paragraphe et de son contenu
  const taskValue = document.querySelector('#task').value;
  const para = document.createElement('p');
  //Partie Bonus
  //Création de la div
  const divBonus = document.createElement('div');
  // création de la class de la div
  divBonus.setAttribute('class', 'container');
  //Ajout de la div et de ses élément dans la div parent "#tasks"
  tasks.appendChild(divBonus);
  para.textContent = taskValue;
  divBonus.appendChild(para);
  //On vide l'input
  document.querySelector('#task').value = '';
  //Creation bouton suppression
  const btnDel = document.createElement('button');
  btnDel.setAttribute('onClick', 'deleteTask(this)');
  btnDel.setAttribute('id', 'delete');
  btnDel.textContent = 'Supprimer';
  divBonus.appendChild(btnDel);

  //Creation bouton update
  const btnUpdate = document.createElement('button');
  btnUpdate.setAttribute('onClick', 'updateTask(this)');
  btnUpdate.setAttribute('id', 'update');
  btnUpdate.textContent = 'Update';
  divBonus.appendChild(btnUpdate);

  //partie localStorage
  //let val = JSON.stringify(taskValue);
  for (let i = 0; i < localStorage.length; i++) {
    val = taskValue;
    let tab = [];
    tab += [val];
    console.log(tab);
  }
}

//Suppression de tous les paragraphes
function delAllTask() {
  const supPara = document.querySelector('#tasks');
  while (supPara.firstChild) {
    // tant que tasks a un 1er enfant
    supPara.removeChild(supPara.firstChild); // tu supprimes le premier
  }
}

//Recherger la page
function reload() {
  location.reload();
}

// BONUS
//Suppresion du container ciblé
function deleteTask(el) {
  target = el.parentNode;
  target.remove(el);
  //Solution possible
  //el.parentNode.remove();
}

// //Mettre a jour le container ciblé
// function updateTask(el) {
//   let updateText = document.querySelector("#task").value;
//   el.parentNode.firstChild.textContent = updateText;
//   document.querySelector("#task").value = "";

//   // Autre solution (previousSiblin va ciblé l'élement FRERE (donc de meme niveau) qui est avant)
//   //el.previousSibling.previousSibling.textContent = updateText;

//   //Encore une autre façon de ciblé
//   //el.parentNode[2];
// }
let statut = true;

function updateTask(el) {
  if (statut) {
    let texte = el.parentNode.firstChild.textContent;
    createInput = document.createElement('input');
    createInput.setAttribute('type', 'text');
    createInput.setAttribute('id', 'updateInput');
    el.parentNode.replaceChild(createInput, el.parentNode.firstChild);
    createInput.value = texte;
    localStorage.setItem('tasks', '[]');
    statut = false;
  } else {
    let valueInput = createInput.value;
    para = document.createElement('p');
    el.parentNode.replaceChild(para, createInput);
    para.textContent = valueInput;
    statut = true;
  }
}
