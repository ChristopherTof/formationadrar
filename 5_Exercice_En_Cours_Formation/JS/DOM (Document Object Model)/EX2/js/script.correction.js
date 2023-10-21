const user = {
  "id": 1,
  "nom": "Chiarandini",
  "prenom": "Christopher",
  "age": 38,
  "image": "./logo.jpg",
};

const section = document.querySelector("div");
section.setAttribute("id", user.id);

const p1 = document.querySelector("p:nth-child(2)");
const p2 = document.querySelector("p:nth-child(3)");
const p3 = document.querySelector("p:nth-child(4)");

//récuperer les attributs dans une nodelist
//const liste = document.querySelectorAll("p"); // on récupère tous les p

// liste[0].textContent = user.nom;
// liste[1].textContent = user.prenom;
// liste[2].textContent = user.age;

p1.textContent = user.nom;
p2.textContent = user.prenom;
p3.textContent = user.age;

const img = document.querySelector("img");
img.setAttribute("src", user.image);

//Variante
// img.src = user.image;
//document.querySelector('img').setAttribute('src', user.image);
//document.querySelector('img').setAttribute.src = user.image;

p1.style.fontSize = "11px";
p2.style.fontSize = "11px";
p3.style.fontSize = "11px";
p1.style.color = "blue";
p2.style.color = "blue";
p3.style.color = "blue";

// //variante boucle for
// for (i = 0; i < liste.length; i++) {
//   liste[i].style.fontSize = "11px";
//   liste[i].style.color = "blue";
// }

// // variante forEach
// liste.forEach((element) => {
//   element.style.fontSize = "11px";
//   element.style.color = "blue";
// });

img.style.width = "40px";
img.style.height = "40px";
img.style.float = "right";
img.style.margin = "10px";
section.style.background = "rgb(220, 220, 220)";
section.style.padding = "5px";
