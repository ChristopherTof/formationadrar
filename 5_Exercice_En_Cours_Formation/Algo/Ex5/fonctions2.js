/*
Écrire une fonction syracuse qui prend un nombre en entrée, et qui retourne :
- le triple du nombre + 1 si le nombre est impair
- la moitié du nombre sinon
*/
function syracuse(a) {
  if (a % 2 == 1) {
    return a * 3 + 1;
  } else {
    return a / 2;
  }
}
console.log(syracuse(25));
/*
Écrire une fonction countDown qui reçoit un nombre positif en entrée, et qui affiche dans la console le compte à rebours jusqu'à 0 en partant de ce nombre.
Par exemple, l'appel à `countDown(3)` devra afficher
3
2
1
0
*/
function countdown(a) {
  for (let i = a; i >= 0; i--) {
    console.log(i);
  }
}
countdown(3);
/*
Écrire une fonction fastCountDown qui reçoit un nombre en entrée et qui affiche un compte à rebours en partant de cette valeur. La valeur sera divisée par 2 à chaque fois, et le compte à rebours s'arrête quand la valeur devient inférieur à 0.1.
Par exemple, l'appel à `fastCountDown(3)` devra afficher
3
1.5
0.75
0.375
0.1875
*/
function fastCountdown(a) {
  while (a >= 0.1) {
    console.log(a);
    a = a / 2;
  }
}
fastCountdown(3);
/*
Écrire une fonction evenNumbers qui reçoit deux nombres en entrées et qui affiche tous les nombres pairs entre ces deux nombres.
Par exemple, l'appel à `evenNumbers(5,14)` devra afficher
6
8
10
12
*/
const evenNumbers = (a, b) => {
  for (let i = a; i < b; i++) {
    if (i % 2 == 0) {
      console.log(i);
    }
  }
};
evenNumbers(5, 14);

/*
Sur la page wikipedia du PGCD (pas besoin de savoir ce que c'est), on peut trouver l'algorithme récursif suivant :
```
fonction euclide(a, b)
    si b = 0 alors retourner a
    sinon retourner euclide(b, a modulo b)
```
Écrire cette fonction.
*/
const euclide = (a, b) => {
  if (b == 0) {
    return a;
  } else {
    return euclide(b, a % b);
  }
};

/*
À la main, calculer `euclide(6,10)`.

10, 6modulo10= 6 donc [10 ,6] puis 
6, 10module6= 4 donc [6, 4] puis
4, 6module4 = 2 donc [4, 2] puis 
2 , 4modulo2 = 0 donc [2, 0] puis
2, 0modulo2 = 2 

PGCD = 2
*/
/*
euclide(10,6)= euclide(6,4)=euclide(4,2)=euclide(2,0) = 2


*/
