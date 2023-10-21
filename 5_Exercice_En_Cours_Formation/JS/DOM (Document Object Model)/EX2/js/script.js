/* 
Exercice 15 DOM :
Créer une page HTML qui va contenir les éléments suivants :
-Un titre h1 -> "Liste des utilisateurs",
-Une div,
-Dans la div ajouter :
    --1 balise img,
    --3 paragraphes,
Depuis l'objet JS ci-dessous :
 

const user = {
  'id' : 1,
  'nom': 'votre nom',
  'prenom': 'votre prénom',
  'age': votre age,
  'image' :'./logo.jpg'
}

-Ajouter un attribut id à la div qui va avoir en valeur -> (user.id),
-Remplacer le contenu des 3 paragraphes par les valeurs user.nom, user.prenom et user.age,
-Remplacer l'image par l'url contenu dans user.image

Mettre en forme en JS les éléments suivants :
-paragraphe nom, prenom, age : police taille 11 px, couleur blue,
-taille de l'image : 100 px de large et 100 px de long,
-Aligner l'image à en haut à droite et ajouter un margin de 10 px.
-remplacer la couleur de fond de la div : rgb(220, 220, 220).
NB : pour remplacer le contenu text d'un élément HTML, utilisez textContent
*/

// initialisation de la variable user
const user = {
  "id": 1,
  "nom": "Chiarandini",
  "prenom": "Christopher",
  "age": 38,
  "image": "./logo.jpg",
};

//Création des éléments

const title = document.createElement("h1");
const section = document.createElement("div");
section.setAttribute("id", user.id);
const img = document.createElement("img");
const p1 = document.createElement("p");
const p2 = document.createElement("p");
const p3 = document.createElement("p");

// appel du body
const body = document.querySelector("body");

// Ajout du contenu dans les éléments
title.textContent = "Liste des utilisateurs";
img.src = user.image;
p1.textContent = user.nom;
p2.textContent = user.prenom;
p3.textContent = user.age;
//Ajout des élément sur le body
body.appendChild(title);
body.appendChild(section);
section.appendChild(img);
section.appendChild(p1);
section.appendChild(p2);
section.appendChild(p3);

// Création du sytle
let stylePara = {
  "fontSize": "11px",
  "color": "blue",
};

let sizeImg = {
  "float": "right",
  "width": "100px",
  "height": "100px",
  "margin-top": "10px",
  "margin-right": "10px",
};
// ajout de style par l'id

let changeColorSection = document.getElementById(user.id);
let sectionStyles = {
  "background": "rgb(220, 220, 220)",
  "height": "120px",
};

// Ajout du style aux éléments
Object.assign(p1.style, stylePara);
Object.assign(p2.style, stylePara);
Object.assign(p3.style, stylePara);
Object.assign(img.style, sizeImg);
Object.assign(section.style, sectionStyles);

///////////////////////////////////////////////////CORRECTION
