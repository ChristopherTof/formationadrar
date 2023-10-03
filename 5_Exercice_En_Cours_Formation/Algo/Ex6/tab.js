let tab = [4, 5, 6, 7, 8]; // Creer un tableau
//Affiche le tabelau, automatiquement numéroté de 0 à 4
console.log(tab);
//Affiche la case du tableau demandé, ici la case 2 donc affichera 6
console.log('Je veux afficher le 3eme chiffre du tableau : ' + tab[2]);

// Ajouter une valeur a la fin du tableau
tab.push(100);
tab.push(0);

// Supprimer la dernière valeur du tableau
tab.pop();
console.log(tab);
// affiche la valeur supprimer (ici 100)
console.log('La valeur ' + tab.pop() + ' a été supprimé du tableau');

tab.length; // variable qui contient la taille du tableau
console.log('La longeur du tableau est de ' + tab.length + ' cases');

// parcours de tableau
// boucle for avec un tableau

console.log('Je parcours mon tableau avec une boucle for : ');
for (let i = 0; i < tab.length; i++) {
  console.log('Dans la case ' + i + ' il y a la valeur ' + tab[i] + ' du tableau tab');
}
