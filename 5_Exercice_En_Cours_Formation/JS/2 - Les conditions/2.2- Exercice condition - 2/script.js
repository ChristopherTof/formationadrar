/*
Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de sa catégorie : 
•    "Poussin" de 6 à 7 ans
•    "Pupille" de 8 à 9 ans
•    "Minime" de 10 à 11 ans
•    "Cadet" après 12 ans

on peut utiliser les switch
*/

function verifAge(){
 let age = parseInt(prompt("Ecris ton âge ci-dessous"));

 switch (true){

    case age >=6 && age <=7 : console.log("Tu es Poussin");
    break;
    case age >=8 && age <=9 : console.log("Tu es Pupille");
    break;
    case age >=10 && age <=11 : console.log("Tu es Minime");
    break;
    case age >=12 : console.log("Tu es Cadet");
    break;

    default : console.log("Tu es trop jeune pour entrer dans une catégorie");
     
 }

//  // 2nde façon de faire
//  switch(age){
//    case 1:
//    case 2:
//    case 3:
//    case 4:
//    case 5:
//       console.log("Tu es beacoup trop jeune, reviens quand tu auras 6 ans! ");
//       break;

//    case 6: 
//    case 7: 
//       console.log("Tu es Poussin");
//    break;

//    case 8:
//    case 9:
//       console.log("Tu es Pupille");
//       break;

//    case 10:
//    case 11:
//       console.log("Tu es Minime");
//       break;

//    default : console.log("tu es cadet");
//  }
 

}

verifAge();
