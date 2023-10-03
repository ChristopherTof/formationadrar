// Écrire une fonction qui prend un tableau en entrée et affiche le dernier élément de ce tableau.
const lastNbr = (a) => {
  let last = a[a.length - 1];
  console.log('Affiche : Le dernier chiffre du tableau est : ' + last);
};
lastNbr([144, 202, 216, 216, 222, 64]);

// Écrire une fonction qui prend un tableau en entrée et retourne le dernier élément de ce tableau.

const returnLastNbr = (a) => {
  let last = a[a.length - 1];
  return last;
};

console.log('Le dernier chiffre du tableau retourné est : ' + returnLastNbr([144, 202, 216, 216, 222, 64, 88]));

// Écrire une fonction qui prend en entrée un tableau et qui retourne le minimum de ce tableau.
function minTab(a) {
  let min = a[0];
  for (let i = 0; i < a.length; i++) {
    if (a[i] < min) {
      min = a[i];
    }
  }
  return min;
}
console.log(minTab([144, 202, -1000, 216, 222, 64, 125, 547, 0, 1, -1001, 869]));

// Écrire une fonction qui prend en entrée un tableau et qui retourne le maximum de ce tableau.
function maxTab(a) {
  let max = a[0];
  for (let i = 0; i < a.length; i++) {
    if (a[i] > max) {
      max = a[i];
    }
  }
  return max;
}
console.log(maxTab([144, 202, 1216, 222, 64, 125, 547, 0, 1, 869]));

// [Plus difficile - bonus] Écrire une fonction qui prend en entrée un tableau de nombres positifs et qui retourne la deuxième plus grande valeur du tableau.
function minTabTwice(a) {
  let min = a[0];
  let scdMin = a[1];
  for (let i = 0; i < a[i]; i++) {
    if (a[i] < min) {
      min = a[i];
      if (min < scdMin && a[i] < scdMin) {
        scdMin = a[i];
      }
    }
  }
  console.log(scdMin);
}
minTabTwice([144, 202, 216, 32, 31, 222, 64, 125, 547, 1, 869]);

// Écrire une fonction qui prend en entrée un tableau et un nombre et qui retourne le nombre de fois que ce nombre apparaît dans le tableau.

function searchNbr(tab, num) {
  let add = 0;
  for (let i = 0; i < tab.length; i++) {
    if (num == tab[i]) {
      add++;
    }
  }
  console.log(add);
}
searchNbr([1, 2, 5, 15, 25, 69, 55, 75, 5, 5, 25, 5], 5);

// Écrire une fonction qui prend en entrée un tableau et un nombre et qui retourne true si le nombre existe dans le tableau, false sinon.

function giveTruth(tab, num) {
  let add = 0;
  for (let i = 0; i < tab.length; i++) {
    if (tab[i] == num) {
      add++;
    }
  }
  if (add > 0) {
    return true;
  } else {
    return false;
  }
}
console.log(giveTruth([1, 2, 5, 15, 25, 69, 55, 75, 5, 5, 25, 5], 1000));

// [Bonus] Suite de l'exo : on **sait** que le tableau reçu est trié (on ne le vérifie pas). Comment exploiter cette information pour améliorer la recherche d'un élément ?

// Créer un tableau qui contient [1,2,3,...,7777].

function addToArray() {
  let tab = [];
  for (let i = 0; i < 7778; i++) {
    tab.push(i);
  }
  return tab;
}

console.log(addToArray());

// Créer un tableau qui contient [10,20,30,...,77770].

function addToArrayBis() {
  let tab2 = [];
  for (let i = 1; i < 77771; i++) {
    if (i % 10 == 0) {
      tab2.push(i);
    }
  }
  return tab2;
}
let tab2 = addToArrayBis();
console.log(addToArrayBis());
////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////A REVOIR A TETE REPOSER!!!!!!!
////////////////////////////////////////////////////////////////////////////////////////////
tab3.push(tab2.length);
// En se servant du tableau précédent, créer un tableau qui contient [5,10,15,...,38885].

// function addOddToArray() {
//   for (let i = 1; i < tab2.length / 2; i++) {
//     if (i % 5 == 0) {
//       tab3.push(i);
//     }
//   }
// }
// addOddToArray();
console.log(tab2);

////Fonction qui fonction sans l'exercice du dessus
function addFiveToFive() {
  tTest = [];
  for (let i = 1; i < 38886; i++) {
    if (i % 5 == 0) {
      tTest.push(i);
    }
  }
  return tTest;
}
console.log(addFiveToFive());
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////A REVOIR AUSSI
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Écrire une fonction qui prend un tableau en entrée et qui en supprime les dernières valeurs, tant qu'elles sont inférieures à 50.
function deleteTheEnd(tab) {
  let memory = tab[0];

  for (let i = 0; i < tab.length; i++) {
    if (tab[i] >= 50 && tab[i] <= 59) {
      memory = tab[i];
    }
  }
  return memory;
}

console.log(deleteTheEnd([1, 45, 88, 54, 23, -100, 12]));
// console.log(leNomDeVotreFonction([1,45,88,54,23,-100,12])); // doit afficher [1,45,88,54]
