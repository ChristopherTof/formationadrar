/* 
Exercice 14 DOM : 
Ajouter les éléments HTML suivants dans votre page index.html :
-Titre h1 avec un texte à l'intérieur,
-Une div avec du texte à l'intérieur,
-Dans la div un paragraphe avec du texte à l'intérieur,
En JS :
Vous allez changer:
-la taille de la police du titre h1 en 14 px,
 -la police de la div et du paragraphe en Arial,
-la couleur du texte du paragraphe en vert,
-Ajouter un margin top à la div de 30 px,
Remplacer :
-le contenu du titre h1 par -> nouveau titre,
-le contenu du paragraphe -> nouveau contenu du paragraphe.
NB : En utilisant querySelector.
*/

// Création des éléments

const body = document.querySelector("body");
const title = document.createElement("h1");
const section = document.createElement("div");
const para = document.createElement("p");

title.textContent = "Hello World";
para.textContent = "Je suis un paragraphe ajouté en JS";

body.appendChild(title);
body.appendChild(section);
section.appendChild(para);

// Partie CSS
title.style.fontSize = "14px";
section.style.fontFamily = "Arial";
section.style.color = "green";
section.style.marginTop = "30px";

//Remplacement
title.textContent = "Nouveau Titre";
para.textContent = " Nouveau contenu du paragraphe";
