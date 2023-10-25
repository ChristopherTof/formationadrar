/* 
Exercice 10 Boucle :
Un enseignant a besoin de saisir les notes de ses élèves.
Il a également besoin depuis ces notes de calculer la moyenne.
Écrire le programme qui permet de saisir la liste des notes (dans un prompt), les stocker dans un tableau et retourner la moyenne du devoir (afficher dans la console). 
*/

let tabNotes = [];
let nbrEleve = parseInt(prompt("Nbr d'élève"));

function saveNote() {
  for (let i = 0; i < nbrEleve; i++) {
    let eleve = {
      "prenom": prompt("Prénom de l'élève"),
      "math": parseInt(prompt("Note de maths")),
      "anglais": parseInt(prompt("Note d'anglais")),
      "histoire": parseInt(prompt("Note d'Histoire")),
    };
    tabNotes.push(eleve);
  }

  console.log(tabNotes);
}

saveNote();

let noteMath = tabNotes[0].math;
let noteAnglais = tabNotes[0].anglais;
let noteHistoire = tabNotes[0].histoire;

for (let j = 0; j < tabNotes.length; j++) {
  noteMath = tabNotes[j].math;
  noteAnglais = tabNotes[j].anglais;
  noteHistoire = tabNotes[j].histoire;

  let moyEle = {
    "moyenne": (tabNotes[j].math + tabNotes[j].anglais + tabNotes[j].histoire) / 3,
  };

  console.log(moyEle);
}

////////////////////////////////////////////////////////////////////////////////////////////CORRECTION

// //tableau qui va stocker les nombres
// let notes = [];
// //variable qui stocke le nombre de notes
// nbrNotes = parseInt(prompt("Choisir le nombre de notes à saisir"));
// //compteur
// let i = 0;
// //somme
// let somme = 0;
// //valide (tant que le format de données est correct)
// let valide = true;
// //boucle pour ajouter les notes et calculer la somme
// while(i < nbrNotes && valide){
//     //ajout d'une note
//     let note = parseInt(prompt("Saisir la note de l'èléve"));
//     //test si la note est bien un nombre entier
//     if(Number.isInteger(note)){
//         //ajouter la note au tableau
//         notes[i] = note;
//         //ajouter a la somme des notes
//         somme += notes[i];
//     }
//     //test sinon le format est incorrect
//     else{
//         //on passe valide à false
//         valide = false;
//     }
//     //on incremente le compteur
//     i++;
// }
// //test si valide vaut true
// if(statut){
//     //affiche la moyenne
//     console.log(somme/nbrNotes);

// }
// //sinon on affiche une erreur
// else{
//     console.log("Vous avez une note invalide");
// }
