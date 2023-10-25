/* 
Une boulangerie vend des chocolatines. Pour calculer le prix qu'elle va facturer a ses clients elle a besoin d'un programme. 
-Une chocolatine coûte 1€40 a l'unité jusqu'à 10. 
-Les 10 suivantes coûtent 1€30 pièce et 
-Au-delà elles coûtent 1€20 pièce.
Écrire un programme qui calcule le prix à payer  en fonction de la quantité (depuis un prompt) 
Afficher dans la console le montant à payer. 
*/

let choco = [];

let nmbPrice = parseInt(prompt("Entrer le nombre de prix différents"));
let price = 0;

function enterPrice() {
  for (let i = 0; i < nmbPrice; i++) {
    price = parseFloat(prompt("Entrer le prix"));
    choco.push(price);
  }

  let nbrChoco = parseInt(prompt("Entrer le nombre de Chocolatines"));
  let prixTotal = 0;
  let total = 0;
  if (nbrChoco <= 10) {
    prixTotal = nbrChoco * choco[0];
  } else if (nbrChoco > 10 && nbrChoco <= 20) {
    prixTotal = 10 * choco[0] + (nbrChoco - 10) * choco[1];
  } else {
    prixTotal = 10 * choco[0] + 10 * choco[1] + (nbrChoco - 20) * 1.2;
  }
  console.log(`Le prix pour ${nbrChoco} chocolatines est de ${prixTotal} € `);
}
enterPrice();

//////////////////////////////////////////////////////////////////////////CORRECTION

// let nbrChoco = parseInt(prompt("Saisir le nombre de chocolatine"));
// let total = 0;

// if (nbrChoco > 0 && nbrChoco <= 10) {
//   total = nbrChoco * 1.4;
// } else if (nbrChoco >= 11 && nbrChoco <= 20) {
//   total = 10 * 1.4 + (nbrChoco - 10) * 1.3;
// } else {
//   total = 10 * 1.4 + 10 * 1.3 + (nbrChoco - 20) * 1.2;
// }

// alert("Le prix total est de : " + total);
