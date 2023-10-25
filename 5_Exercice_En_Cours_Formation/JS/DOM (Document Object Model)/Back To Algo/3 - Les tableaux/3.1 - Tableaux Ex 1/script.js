function addToArray() {
  let mot = [];
  let tab = [];

  mot[0] = prompt("Ecrivez le mot 1");
  mot[1] = prompt("Ecrivez le mot 2");
  mot[2] = prompt("Ecrivez le mot 3");

  tab[0] = mot[0];
  tab[1] = mot[1];
  tab[2] = mot[2];

  console.log(tab);
  tab.sort();
  if (tab[0] == mot[0] && tab[1] == mot[1] && tab[2] == mot[2]) {
    console.log("Les mots sont bien écris dans l'ordre");
  } else {
    console.log("Les mots ne sont pas dans l'ordre alphabétique, retente ta chance");
  }
}
addToArray();
