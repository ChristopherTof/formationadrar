// recupérer un élément
const titre = document.querySelector("h1");
console.log(titre);

// va ajouter hello world sur la page html
titre.textContent = "Hello World";

// change la couleur du titre
titre.style.color = "red";

// creation d'une div
const section = document.createElement("div");
//Création de la variable qui récupère le body du fichier HTML
const body = document.querySelector("body");
//Ajout d'une div sur le body
body.appendChild(section);

// Donner un id à la div
section.setAttribute("id", "contenu");
// MAJ de la section sur le HTML
body.appendChild(section);

section.textContent = "Je suis un texte ajouté en Javascript";

//Recupération de valeur vi html
const nom = document.querySelector("#nom");
const prenom = document.querySelector("#prenom");

function recup() {
  console.log(nom.value + prenom.value);
}
