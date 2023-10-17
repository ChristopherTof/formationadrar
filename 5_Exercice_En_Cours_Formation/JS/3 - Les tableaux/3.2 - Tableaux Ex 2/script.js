/* Exercice 8 Tableau :
Créer un programme qui va demander 3 valeurs (prompt 3) :
-nom de produit (string),
-prix HT (float),
-quantité (integer),
Ajouter ces informations dans un tableau (chaque valeur dans une nouvelle colonne),
Calculer le prix TTC (prix HT1.20 * quantité) et stocker le prix TTC à la fin du tableau.
Afficher le Prix TTC dans la console (depuis la dernière colonne du tableau)
*/

//VERSION 1

//let tab = [];

// tab[0] = { "produit": prompt("Nom du Produit") };
// tab[1] = { "PrixHT": parseFloat(prompt("Prix HT")) };
// tab[2] = { "Quantité": parseInt(prompt("Quantité demandé")) };

// tab.push({ "PrixTTC": Math.round(tab[1].PrixHT * 1.2 * tab[2].Quantité, 2) });

// console.log(`Le tarif de ${tab[2].Quantité} ${tab[0].produit} au prix de ${tab[1].PrixHT} est de ${tab[3].PrixTTC} €`);

//VERSION 2

// let tab = [];
// let product = prompt("Nom du produit");
// let price = parseFloat(prompt("Prix du produit"));
// let quantity = parseInt(prompt("Quantité"));

// tab.push(product, price, quantity);

// tab.push(price * 1.2 * quantity);

// console.log(tab);
// console.log(`Le prix TTC de ${quantity} ${product} est de ${tab[tab.length - 1]}`);

//VERSION 3
// Tableau associatif
// let produit = {
//   product: prompt("Nom du produit"),
//   price: parseFloat(prompt("Prix du prodit")),
//   quantity: parseInt(prompt("Quantité")),
// };

// produit.prixTtc = produit.price * produit.quantity * 1.2;

// let produits = [];
// produits.push(produit);

// console.log(`Le tarif de ${produit.product} est de ${Math.round(produit.prixTtc, 2)}`);

//Version 4 en boucle for
let produits = [];

for (let i = 0; i < 2; i++) {
  let produit = {
    product: prompt("Nom du produit"),
    price: parseFloat(prompt("Prix du prodit")),
    quantity: parseInt(prompt("Quantité")),
  };

  produit.prixTtc = Math.round(produit.price * produit.quantity * 1.2);
  produits.push(produit);
}

console.log(produits);
