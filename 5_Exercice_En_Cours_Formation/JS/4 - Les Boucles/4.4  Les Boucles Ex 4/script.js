/*
Exercice 13 Boucles :
Nous avons un jeu de dés que nous souhaitons automatiser.
Les règles de ce jeu de dès sont les suivantes :
-Il y à 2 participants : la banque et le joueur.
-Le jeu dure 5 tours.
-A chaque tour :
    --La banque lance un dès de 6 faces (score 1 à 6).
    --Le joueur lance un dès de 6 faces (score 1 à 6).
    --Si le joueur fait plus que la banque, ajouter 1 pts au score du joueur,
    --Si le joueur fait le même lancé que la banque, ajouter 2 pts au score du joueur.
    --Si le joueur fait moins que la banque, ajouter 1 pts au score de la banque.
-A la fin des 5 tours le gagnant est celui qui a le score le plus élevé.
-> Afficher le gagnant et son score (nbr de pts). 
*/

let banque = 0;
let joueur = 0;

let resultJ = 0;
let resultB = 0;

function jeuDuGo() {
  for (let i = 0; i < 5; i++) {
    lancerDeJoueur();
    lancerDeBanque();
    if (resultJ > resultB) {
      joueur++;
      console.log(joueur + " à " + banque);
    } else if (resultJ == resultB) {
      joueur++;
      console.log(joueur + " à " + banque);
    } else if (resultJ < resultB) {
      banque++;
      console.log(joueur + " à " + banque);
    }
  }

  if (joueur > banque) {
    console.log("Le joueur a gagné " + joueur + " points à " + banque);
  } else {
    console.log("La banque a gagnée " + banque + " points à " + joueur);
  }
}

function lancerDeJoueur() {
  resultJ = Math.floor(Math.random() * 6 + 1);
  console.log("De joueur " + resultJ);
}

function lancerDeBanque() {
  resultB = Math.floor(Math.random() * 6 + 1);
  console.log("De banque " + resultB);
}

jeuDuGo();
