// Récupération des élément du DOM
const body = document.querySelector("body");
const rtasks = document.querySelector("#rtasks");

//création du tableau
localStorage.getItem("tasks") == null ? localStorage.setItem("tasks", []) : false;

//Création de paragraphe au clic
function addTask() {
  //le code ci-dessous  : récupére la clé tasks dans le localstorage
  //et le met à jour avec la valeur saisie dans l'input du formulaire
  //récupération de l'input ('#task)
  let valeur = document.querySelector("#task").value;
  console.log(valeur);
  //récupérer dans une variable la valeur clé ('tasks')
  let tasks = localStorage.getItem("tasks");
  //test si la clé tasks dans localstorage est vide
  if (tasks == "") {
    tasks += valeur;
  }
  //test sinon elle n'est pas vide
  else {
    //transforme en tableau
    tasks = tasks.split(",");
    //ajoute la valeur de l'input au tableau
    tasks.push(valeur);
  }
  localStorage.setItem("tasks", tasks);

  document.querySelector("#task").value = "";
  location.reload();
}

//Suppression de tous les paragraphes
function delAllTask() {
  const supPara = document.querySelector("#rtasks");
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
}

let statut = true;

function updateTask(el) {
  if (statut) {
    let texte = el.parentNode.firstChild.textContent;
    createInput = document.createElement("input");
    createInput.setAttribute("type", "text");
    createInput.setAttribute("id", "updateInput");
    el.parentNode.replaceChild(createInput, el.parentNode.firstChild);
    createInput.value = texte;
    statut = false;
  } else {
    let valueInput = createInput.value;
    para = document.createElement("p");
    el.parentNode.replaceChild(para, createInput);
    para.textContent = valueInput;
    statut = true;
  }
}

// Création de la fonction showAllTask qui affiche les valeur du localStorage
function showAllTask() {
  // On récupérer notre clé localStorage
  let value = localStorage.getItem("tasks");
  // si on ne rajoute pas cette condition, une div vide sera créer
  if (value != "") {
    // ON la transforme en tableau
    value = value.split(",");

    //Création d'une boucle qui va créer une div avec chaque valeur de la clé localStorage
    for (let i = 0; i < value.length; i++) {
      //Partie Bonus
      //Création de la div
      const divBonus = document.createElement("div");
      // création de la class de la div
      divBonus.setAttribute("class", "container");
      //Ajout de la div et de ses élément dans la div parent "#tasks"
      rtasks.appendChild(divBonus);
      let para = document.createElement("p");
      para.textContent = value[i];
      divBonus.appendChild(para);
      //On vide l'input
      document.querySelector("#task").value = "";
      //Creation bouton suppression
      const btnDel = document.createElement("button");
      btnDel.setAttribute("id", "delete");
      btnDel.textContent = "Supprimer";
      divBonus.appendChild(btnDel);

      //Creation bouton update
      const btnUpdate = document.createElement("button");
      btnUpdate.setAttribute("id", "update");
      btnUpdate.textContent = "Update";
      divBonus.appendChild(btnUpdate);
    }
  }
}
