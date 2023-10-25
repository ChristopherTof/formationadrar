const container = document.querySelector("#container");
container.textContent = "Exemple";
const titre = document.createElement("h1");
titre.textContent = "Mon super titre";
container.appendChild(titre);
let statut = true;

function change() {
  if (statut) {
    container.classList.add("test2");
    container.classList.remove("test");
    statut = false;
  } else {
    container.classList.add("test");
    container.classList.remove("test2");
    statut = true;
  }
}

//récupérer la valeur d'une variable CSS
function getCssVariable(attribut) {
  const rootAttr = getComputedStyle(root);
  return rootAttr.getPropertyValue(attribut);
}
//fonction pour modifier la valeur d'une variable
function setCssValue(attribut, value) {
  root.style.setProperty(attribut, value);
}
setCssValue("--bg", "yellow");
