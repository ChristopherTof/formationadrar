function calcul(nbr) {
  let add = 0;
  let div = 0;
  for (let i = 0; i < 10; i++) {
    add += nbr;
    if (i == 5 - 1) {
      div = add;
    }
  }
  console.log(`Au bout de 10 tours la fonction calcul(1095) renvoi ${add / div}`);
}

calcul(1095);
