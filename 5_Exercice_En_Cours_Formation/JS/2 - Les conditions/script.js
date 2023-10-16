/*
Exercice 2 : Les tests :
Ecrire un algorithme qui prend un nombre (variable nbr1) en entrée affiche dans la console si le nombre est positif ou négatif.
Exercice 3 : Les tests :
Ecrire un algorithme qui prend deux  nombres en entrée (variable nbr1 et nbr2) affiche dans la console si la somme des deux nombres est positive ou négative.
 */



function verifNumber () {
    let nbr1 = prompt("votre chiffre ici")
    if (nbr1 > 0){
        console.log (`Le nombre ${nbr1} est bien positif`);
    } else {
        console.log (`Le nombre ${nbr1} est bien negatif`);
    }
}

verifNumber ();


function verifAddition () {
    let nbr1 = parseInt(prompt("Votre 1er chiffre")); //parseInt renvoie une nombre entier
    let nbr2 = parseInt(prompt("Votre 2nd chiffre"));
    let result = nbr1 + nbr2;
    if (result > 0){
        console.log (`L'addition de ${nbr1} et ${nbr2} est ${result}. Il est positif`);
    } else {
        console.log (`L'addition de ${nbr1} et ${nbr2} est ${result}. Il est négatif`);
    };
}

verifAddition(25, 26);

// // Seconde façon de faire


// // Variables
// let nbr1 = prompt("Saisir un nombre");
// let alerte = alert ("je suis une alerte"); // creer une alerte
// let confirmation = console.log(confirm("Confirme moi"));  // creer une fenetre qui renvoie tru ou false en fonction de ce qui est cliqué

// if(!Number.isInteger(nbr1)){  //isInteger est un booleen qui va nous dire si c'est un chiffre ou non
//     console.log("Ce n'est pas un nombre")
// }
// if (nbr1 > 0){
//     console.log("Positif");
// }else if (isNaN(nbr1)){  // vérifie si nbr1 est numérique ou non
//     console.log("Ce n'est pas un nombre");
// }
// else {
//     console.log("Négatif");
// }