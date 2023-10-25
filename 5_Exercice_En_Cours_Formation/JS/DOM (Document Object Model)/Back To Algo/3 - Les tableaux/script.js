// // Initialisation d'un tableau
// let tab = []; // Un tableau commence toujours à l'index 0

// //Ajouter des données dans les colonnes du tableau :

// tab[0] = 200; // Ici on ajoute le chiffre 200 à l'index 0

// /*
// On peut utiliser aussi .push qui va lui ajouter automatiquement la donnée à la suite
// .pop lui supprime la derniere colonne du tableau
// */
// tab.push(100);
// console.log(tab); // affiche (2) [200,100]

// tab.pop();
// console.log(tab); // affiche [200]

// tab.push(320);
// tab.push(150);
// tab.push(102);
// tab.push(25);
// tab.push(870);
// console.log(tab); // affiche (6) [200, 320, 150, 102, 25, 870]

// tab[2] = 1000;
// console.log(tab); // affiche (6) [200, 320, 1000, 102, 25, 870]

//Tableau associatif
let user = { "nom": "Chiarandini", "prenom": "Christopher", "age": 38 };
console.log(user);

// Créer un tableau vide
let tab = [];
// Créer un tableau avec des valeurs
let tab2 = [10, 54, 38, 34];

//ajouter des données dans une colonne
tab2[4] = 68;

//ajouter des données à la fin d'un tableau
tab2.push(66);

// supprimer la dernière colonne
tab2.pop();

//modifier une colonne par son numéro
tab2[1] = 3; //change 54 par 3

console.log(tab2);
