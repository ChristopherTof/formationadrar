/*
Exercice 12 Boucles :
Pour son nouveau spectacle, un mentaliste a besoin d'un programme pour s'exercer à deviner un nombre entre 1 et 100.
Pour réussir son tour il doit deviner le nombre en moins de 10 tentatives.
A chaque tour il va demander si le nombre qu’il énonce est plus petit ou plus grand que le nombre choisi.
-Si il réussit à découvrir le nombre en moins de 10 essais 
            -> son entrainement acharné a payé, 
-Sinon 
           -> il est un mauvais mentaliste et il va devoir changer de métier.
Il souhaite savoir en cas de réussite (en moins de 10 essais) 
           -> le nombre d'essai qu'il a effectué pour trouver le nombre. 
*/

let compteur = 0;
let valide = true;

function mentalist(nb) {
  console.log("Le chiffre a trouvé est : " + nb);

  let chiffre = 10;

  while (compteur < 10) {
    compteur++;
    console.log(compteur);
    numberMentalist = Math.floor(Math.random() * chiffre + 1);
    if (numberMentalist > nb) {
      chiffre = numberMentalist;
      console.log("Plus Petit " + numberMentalist);
    } else if (numberMentalist < nb) {
      console.log("Plus Grand " + numberMentalist);
    } else if (numberMentalist == nb && compteur < 10) {
      console.log("Super! Le mentaliste a trouver le chiffre " + numberMentalist + " en " + compteur + " coups 😍😍");
      return;
    }
    // console.log("T'es un gros navet");
  }
  console.log(compteur + " fois Perdu Oh le mentaliste a perdu 😒😒");
}

mentalist(parseInt(prompt("Votre chiffre à deviner")));

/////////////////////////////////////////////////////////////////////////Correction

// //nombre random à trouver
// let nbrATrouve = numberRandom(100);
// console.log(nbrATrouve);
// //nombre de tour de jeu
// let tour = 1;
// //première tentative
// let nbrTrouve = prompt("Saisir le nombre à trouver");
// //boucle pour le jeu
// while(nbrATrouve != nbrTrouve && tour < 10){
//     //condition si le nombre est trop grand
//     if(nbrTrouve > nbrATrouve){
//         alert("Saisir un nombre plus petit");
//     }
//     //condition si le nombre est trop petit
//     if(nbrTrouve < nbrATrouve){
//         alert("Saisir un nombre plus Grand");
//     }
//     //incrémenter le tour
//     tour++;
//     //redemander la saisie d'un nombre
//     nbrTrouve = prompt("Saisir le nombre à trouver");
// }
// //condition de victoire
// if(nbrATrouve==nbrTrouve){
//     alert("Bravo tu as gagné en : "+tour+" tours");
// }
// //condition de défaite
// if(tour > 9){
//     alert("Vous avez perdu vous pouvez changer de métier !");
// }
// //fonction qui génére un nombre random
// function numberRandom(nbr){
//     return Math.floor((Math.random() * nbr) + 1);
// }
