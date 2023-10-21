// //Recupération de valeur vi html
// const nom = document.querySelector("#nom");
// const prenom = document.querySelector("#prenom");

// function recup() {
//   console.log(nom.value + prenom.value);
// }

/* 
Exercice 16 DOM :
Depuis l'exemple ci-dessus et la correction de l'exercice 11 (prix des chocolatines) :
-Dans la page HTML ajouter les éléments suivants :
      --un titre h1 (calculer le prix à payer),
      --un input de type text ( id = quantite),
      --un bouton (onclick = calculer()),
      --un paragraphe (id= resultat),
-Dans la partie JS :
créer une fonction qui va se nommer calculer et qui va éffectuer le calcul du prix à payer des chocolatines :
récupérer la valeur de l'input (id quantité) avec value,
afficher dans le paragraphe (id = résultat) le montant à payer.
*/

function calcul() {
  let choco = [1.4, 1.3, 1.2];
  const nbrChoco = document.querySelector("#quantité").value;
  const afficheResult = document.querySelector("#resultat");
  let champVide = document.querySelector("#quantité").value;
  let prixTotal = 0;

  afficheResult.style.color = "black";
  if (!isNaN(champVide)) {
    if (nbrChoco.value <= 10) {
      prixTotal = nbrChoco * choco[0];
    } else if (nbrChoco > 10 && nbrChoco <= 20) {
      prixTotal = 10 * choco[0] + (nbrChoco - 10) * choco[1];
    } else {
      prixTotal = 10 * choco[0] + 10 * choco[1] + (nbrChoco - 20) * 1.2;
    }

    if (champVide == "") {
      afficheResult.style.color = "red";
      afficheResult.textContent = "Merci de définir le nombre de Chocolatine souhaité";
      return false;
    } else {
      afficheResult.textContent = `Le prix pour ${nbrChoco} chocolatines est de ${prixTotal.toFixed(2)} € `;
    }
  } else {
    afficheResult.style.color = "red";
    afficheResult.textContent = "Format non valide";
  }
  document.querySelector("#quantité").value = "";
}
