// Exercice divers_1 :	écrire une fonction qui retourne **la position** du plus grand élément d'un tableau.
// Exemple : positionBiggest([4,7,5,5,6]) retourne 1 car le plus grand est dans la case numéro 1

function positionBiggest(tab) {
  let biggest = tab[0];
  let position = tab[0];
  for (let i = 0; i < tab.length; i++) {
    if (biggest < tab[i]) {
      biggest = tab[i];
      position = i;
    }
  }
  return position;
}

console.log(positionBiggest([4, 7, 5, 5, 6, 72, -100, 254, 5, 9]));
// Exercice divers_2 : écrire une fonction qui fait la somme de tous les éléments d'un tableau.

// Exercice divers_3 : écrire une fonction qui retourne la somme des valeurs positives d'un tableau.

// Exercice divers_4 : En utilisant les deux fonctions précédentes, écrire une fonction qui retourne la somme des valeurs négatives d'un tableau.
