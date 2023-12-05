function calcul(nbr) {
  let add = 0;
  let div = 0;
  for (let i = 0; i < 10; i++) {
    add += nbr;
    if (i == 5 - 1) {
      div = add;
    }
  }
  return `Au bout de 10 tours la fonction calcul(567) renvoi ${add / div}`;
}
console.log(calcul(567));
