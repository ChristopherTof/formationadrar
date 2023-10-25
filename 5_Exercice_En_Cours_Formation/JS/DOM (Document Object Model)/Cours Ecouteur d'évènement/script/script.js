//const titre = document.querySelector("h1");

// titre.addEventListener("click", (e) => {
//   titre.style.color = "red";
//   console.log(e);
// });

const titre = document.querySelectorAll("h1");

titre.forEach((element) => {
  element.addEventListener("click", (e) => {
    element.style.color = "green";
  });
});

//recup d'éléménent

const btn1 = document.querySelector("#btn1");
const btn2 = document.querySelector("#btn2");

const listBtn = document.querySelectorAll("button");

// Ciblage d'un seul élément
btn1.addEventListener("click", (e) => {
  console.log("j'ai cliqué ser ce super Btn1 ❤️");
  console.log(e.target);
});

btn2.addEventListener("click", () => {
  console.log("j'ai cliqué ser ce super Btn2 ❤️ mais il est moins bien que btn1 ❤️❤️");
});

console.log(listBtn);

//Ajouter un evenet click sur tous les boutons

listBtn.forEach((element) => {
  element.addEventListener("click", () => {
    console.log("Je fonctionne sur tous les boutons!!!!");

    //equivalent de this comme dans onclick (html) pour recupérer l'element cliqué
    console.log(element);
  });
});
