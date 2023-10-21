/*
Exercice 9 Tableau et boucle :
Créer un algorithme qui va ajouter à un tableau users (tableau indexé) :
à chaque tours de la boucle : 
-un utilisateur (user) (tableau associatif)  qui va contenir : 
             -> nom, prénom, ageet un numéro de téléphone,
             (les valeurs seront récupérés avec des prompts)
-La boucle va tourner 5 fois,
Afficher dans la console le nom et le prénom de l'utilisateur qui est le plus jeune (tableau users). 
*/

let tab = [];

for (i = 0; i < 5; i++) {
  let user = {
    "nom": prompt(`${i + 1} Votre Nom`),
    "prenom": prompt(`${i + 1} Votre Prenom`),
    "age": prompt(`${i + 1} Votre age`),
    "tel": prompt(`${i + 1} Votre numéro de telephone`),
  };
  //veriosn push
  tab.push(user);
  //version avec indice
  // tab[i] = user;
  console.log(user);
}

let tempAge = tab[0].age;
let indice = 0;

function tri() {
  for (i = 0; i < tab.length; i++) {
    if (tempAge >= tab[i].age) {
      tempAge = tab[i].age;
      indice = i;
    }
  }
  console.log(`La personne la plus jeune est ${tab[indice].nom} ${tab[indice].prenom} qui a ${tab[indice].age} ans`);
}
tri();
