// const produit = document.querySelector("#nom");
// const prixHT = document.querySelector("#prixHT");
// const quantity = document.querySelector("quantite");

// const btnCalcul = document.querySelector("#btn");

// const result = document.querySelector("#resultat");

// let inputs = document.querySelectorAll('input[type="text"]');

// btnCalcul.addEventListener("click", () => {
//   for (let i = 0; i < inputs.length; i++) {
//     if (inputs[i].value == "" || isNaN(inputs[1].value) || isNaN(inputs[2].value)) {
//       inputs[i].style.backgroundColor = "rgba(255, 0, 0, 0.4)";
//     } else {
//       inputs[i].style.backgroundColor = "rgba(0, 255, 0, 0.4)";
//       let prixTTC = inputs[1].value * inputs[2].value * 1.2;
//       result.textContent = `Le prix de ${inputs[2].value}kg de ${inputs[0].value} est de ${prixTTC.toFixed(2)}`;
//     }
//   }
// });

///Correction
//Récupération de résultat
const resultat = document.querySelector("#resultat");

const inputs = document.querySelectorAll('input[type="text"]');
const btn = document.querySelector("#btn");

btn.addEventListener("click", () => {
  for (let i = 0; i < inputs.length; i++) {
    // Si vide
    if (inputs[i].value == "") {
      inputs[i].style.backgroundColor = "rgba(255, 0, 0, 0.4)";
    } else {
      inputs[i].style.backgroundColor = "rgba(0, 255, 0, 0.4)";
    }
    //Autre façon  de faire un if else
    // inputs[i].value==""?inputs[i].style.backgroundColor = "rgba(255, 0, 0, 0.4)" :  inputs[i].style.backgroundColor = "rgba(0, 255, 0, 0.4)"

    //Tester valeur pour le calcul
    if (!isNaN(inputs[1].value) && !isNaN(inputs[2].value) && inputs[1].value > 0 && inputs[2].value > 0) {
      resultat.textContent =
        "Le prix TTC de l'article : " +
        inputs[0].value +
        " est égal à : " +
        (parseInt(inputs[1].value) * parseFloat(inputs[2].value) * 1.2).toFixed(2) +
        " €";
    } else {
      resultat.textContent = "Les données saisies sont érronées";
    }
  }
});
