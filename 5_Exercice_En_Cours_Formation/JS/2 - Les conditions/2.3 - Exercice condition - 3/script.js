/* 
Exercice 6 : Tests : 
Ecrire un algorithme qui demande 3 mots et affiche dans la console si ils sont triés dans l'ordre alphabétiques.
NB : les chaines de caractères peuvent être testé comme des nombres.
*/

function toAlphabet() {
  mot1 = prompt("Ecris le mot 1");
  mot2 = prompt("Ecris le mot 2");
  mot3 = prompt("Ecris le mot 3");

  if (mot1 <= mot2 && mot2 <= mot3) {
    console.log("Les mots sont bien écris dans l'ordre");
  } else {
    console.log("Les mots ne sont pas dans l'ordre alphabétique, retente ta chance");
  }
}

// toAlphabet();

// Version Tableau
// let mot = [];
// mot[0] = prompt("Ecrire le 1er mot");
// mot[1] = prompt("Ecrire le 2nd mot");
// mot[2] = prompt("Ecrire le 3eme mot");

// let tabTri = [];
// tabTri[0] = mot[0];
// tabTri[1] = mot[1];
// tabTri[2] = mot[2];

// tabTri.sort();
// if (tabTri[0] == mot[0] && tabTri[1] == mot[1] && tabTri[2] == mot[2]) {
//   console.log("Les mots sont bien écris dans l'ordre");
// } else {
//   console.log("Les mots ne sont pas dans l'ordre alphabétique, retente ta chance");
// }
