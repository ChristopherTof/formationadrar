/*  
Créer un programme qui va demander 3 valeurs (prompt *3) :
-nom de produit (string),
-prix HT (float),
-quantité (integer),
Ajouter ces informations dans un tableau (chaque valeur dans une nouvelle colonne),
Calculer le prix TTC (prix HT X 1.20 X quantité) et stocker le prix TTC à la fin du tableau.
Afficher le Prix TTC dans la console (depuis la dernière colonne du tableau) (modifié)


Exercice 17 DOM :
Transformer l'exercice 8 pour que le programme utilise des éléments HTML plutôt que des prompts et console.log.
Partie HTML ajouter  les éléments suivants :
-un titre h1 -> calculer le prix TTC,
-un input de (type text, id = prixHt),
-un input de (type text, id = quantite),
-un bouton (onclick =calculer()),
*/

function calcul() {
  //Initialisation des variables
  let stuff = document.querySelector("#objet").value;
  let price = document.querySelector("#prixHT").value;
  let quantity = document.querySelector("#quantité").value;
  let result = document.querySelector("#resultat");

  if (isNaN(price) || isNaN(quantity)) {
    result.textContent = "Format Non Valide. Merci d'écrire un chiffre ";
  } else {
    if (stuff == "" || price == "" || quantity == "") {
      result.textContent = "Merci de remplir les champs demandés";
    } else {
      prixTtc = Math.round(price * quantity * 1.2);
      result.textContent = `Le tarif TTC de ${quantity}kg ${stuff} est de ${prixTtc} €`;
      document.querySelector("#objet").value = "";
      document.querySelector("#prixHT").value = "";
      document.querySelector("#quantité").value = "";
    }
  }
}
