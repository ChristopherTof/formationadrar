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

//section.textContent = "Je suis un texte ajouté en Javascript";

//Recupération de valeur vi html
const nom = document.querySelector("#nom");
const prenom = document.querySelector("#prenom");

function recup() {
  console.log(nom.value + prenom.value);
}

// Ajouter un élément via une action
let compteur = 1;
function ajouter() {
  const list = document.getElementById("resultat");
  const titre = document.createElement("h1");
  titre.setAttribute("id", "para" + compteur++);
  titre.textContent = "Je suis un titre afficher par le bouton ajouter";
  list.appendChild(titre);
}

// recupérer plusieur  element

const listOrdonne = document.querySelectorAll(".menu");
console.log(listOrdonne);
const listeOrdonneV2 = document.getElementsByClassName("menu");
console.log(Array.from(listeOrdonneV2)); // creer un tableau temporaire d'une HTMLCollection

console.log(listeOrdonneV2);

//LocalStorage ajout de cle

localStorage.setItem("Test", "hello world"); //permet de stocker une info dans le local storage du navigateur
console.log(localStorage.getItem("Test"));

localStorage.removeItem("Test"); // va supprimer l'info grace à sa clé

//LE LOCALSTORAGE
//créer des clés
localStorage.setItem("Test", "exemple");
localStorage.setItem("Test2", "exemple");
localStorage.setItem("Test3", "exemple");
//récupérer la valeur d'une clé
console.log(localStorage.getItem("Test"));
//mettre une clé
localStorage.setItem("Test", 125);
//supprimer une clé
localStorage.removeItem("Test");
//supprimer toutes les clés
localStorage.clear();
