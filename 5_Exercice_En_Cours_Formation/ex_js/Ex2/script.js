// La classe des cyberdev de l'ADRAR a mis en place le chocoblast.
// Jean-Marie se fait chocoblast tous les mercredis, et un mardi sur 2.
// Sachant qu'il ramène les chocos un jeudi sur 3, combien de tournées de chocolatines en retard aura-t-il après 60 semaines de cours ?

function chocoBlast() {
  let jmBlast = 0;
  for (let i = 0; i < 60; i++) {
    jmBlast += 1;
    if (i % 2 == 0) {
      jmBlast += 1;
    }
    if (i % 3 == 0) {
      jmBlast -= 1;
    }
  }
  return `Le JM nous doit un paquet de choco!! Il doit ${jmBlast} de tournées de choco!! soit ${12 * jmBlast} chocolatines.
  Et si on concidère la choco à 1.20€, il a économisé ${12 * jmBlast * 1.2}euros 😐. Quel pince!!`;
}

console.log(chocoBlast());
