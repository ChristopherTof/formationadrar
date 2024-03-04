//Initialisation des varibales
const body = document.querySelector('body');
const map = document.querySelector('#worldMap');
// Initialisation
const tooltip = document.querySelector('#tooltip');
tooltip.setAttribute('class', 'toooltip');
tooltip.style.display = 'none';
<<<<<<< HEAD
=======

const showPays = document.querySelector('#para .pays');
const showCitoy = document.querySelector('#para2 .citoy');

>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
const showResultCountry = document.querySelector('#para .count');
const showResultPerson = document.querySelector('#para2 .count');

const cardResultFrance = document.querySelector('#info .count');
const cardResultFrancais = document.querySelector('#info2 .count');

//Récupération de la valeur CSS d'un attribut (ici tooltip)
const tooltipStyle = window.getComputedStyle(tooltip);
const toolW = parseInt(tooltipStyle.width);
const toolH = parseInt(tooltipStyle.height);

//Debut debut de l'année
let tInstant = new Date();
let currentYear = tInstant.getFullYear();
let startYear = new Date(currentYear, 0, 1);
console.log(startYear);
console.log(tInstant);

// //INITIALISATION DES CHIFFRES D'EMISSION
let france = {
  //Valeur pour le pays
  pays: 10.2,
  // Valeur par habitants
  hab: 0.15,
<<<<<<< HEAD
=======
  //nom du pays
  namePays: "la France",

  citoy : "Français"
>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
};

let usa = {
  //Valeur pour le pays
  pays: 15,
  // Valeur par habitants
  hab: 5,
<<<<<<< HEAD
=======
   //nom du pays
  namePays: "les Etats-Unis",

  citoy : "Américains"
>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
};

// Initialisation de la récupération de l'id du setInterval en cours
let intervalIdCumulUser;
let intervalIdCarbonCountry;

window.addEventListener('load', () => {
  loopFr(france.pays, france.hab);
});

//AFFICHAGE DU TOOLTIP A L'ENDROIT DE LA SOURIS
map.addEventListener('click', (evt) => {
  // initialisation de la récupération du target
  let cible = evt.target.id;

  // Kill du compteur en cours
  clearInterval(intervalIdCumulUser);
  clearInterval(intervalIdCarbonCountry);
  //ACTIVATION DES FONCTIONS COMPTEUR EN FONCTION DU PAYS
  switch (cible) {
    case 'FR':
<<<<<<< HEAD
      intervalIdCumulUser = cumulUser(france.hab);
      intervalIdCarbonCountry = carbonCountry(france.pays);
      break;

    case 'US':
      intervalIdCumulUser = cumulUser(usa.hab);
      intervalIdCarbonCountry = carbonCountry(usa.pays);
=======
      intervalIdCumulUser = cumulUser(france.hab, france.citoy);
      intervalIdCarbonCountry = carbonCountry(france.pays, france.namePays);
      break;

    case 'US':
      intervalIdCumulUser = cumulUser(usa.hab, usa.citoy);
      intervalIdCarbonCountry = carbonCountry(usa.pays, usa.namePays);
>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
      break;

    default:
      console.log('Not a good country');
      break;
  }
  let mouseX = evt.clientX + +window.scrollX; //propriété d'un mouseEvent qui donne la coordonée horizontale de la souris par rapport à la fenetre d'affichage (soit le 0,0 de la fenetre du nav)
  let mouseY = evt.clientY + window.scrollY; //propriété d'un mouseEvent qui donne la coordonée verticale de la souris par rapport à la fenetre d'affichage (soit le 0,0 de la fenetre du nav)

  //APPARITON DE LA FENETRE DU COMPTEUR
  if (tooltip.style.display == 'none') {
    tooltip.style.display = 'block';
    tooltip.style.top = mouseY - (toolH + 10) + 'px';
    tooltip.style.left = mouseX - 58 + 'px';
  } else if (tooltip.style.display != 'none') {
    tooltip.style.display = 'none';
  }
});

// tooltip.addEventListener('mouseout', () => {
//   setInterval(() => {
//     tooltip.style.display = 'none';
//   }, 3000);
// });

// function getHour() {
//   setInterval(function () {
//     let tInstant = new Date();
//     //console.log(tInstant);
//     let ecoule = parseInt((tInstant.getTime() - startYear.getTime()) / 1000 / 3600 / 24);
//     let debAn = france.fr * 3600 * 24 * ecoule;
//     console.log(`Depuis le debut de l'année, il s'est écoulé ${ecoule} Jours `);
//     console.log(france.fr);
//   }, 1000);
// }
// getHour();

////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////FONCTIONS COMPTEUR
////////////////////////////////////////////////////////////////////////////////////

//Fonction compteur information emission du User
<<<<<<< HEAD
function cumulUser(qty) {
=======
function cumulUser(qty, resid) {
>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
  let gr = 0;
  let dGr = 0;
  let cGr = 0;
  let kg = 0;
<<<<<<< HEAD
=======
  showCitoy.textContent = resid;
>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4

  return setInterval(function () {
    gr += qty;
    if (gr >= 10) {
      dGr += 1;
      gr = gr - 10;
    }
    if (dGr > 9) {
      cGr += 1;
      dGr = 0;
    }
    if (cGr > 9) {
      kg += 1;
      cGr = 0;
    }
    result = `${kg}.${cGr}${dGr}${parseInt(gr)} Kg`;
    showResultPerson.textContent = result;
  }, 1000);
}

//Compteur par pays
<<<<<<< HEAD
function carbonCountry(qty) {
  let poid = 0;
=======
function carbonCountry(qty, country) {
  let poid = 0;
  showPays.textContent = country;
>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
  return setInterval(function () {
    poid += qty / 10;
    showResultCountry.textContent = `${parseInt(poid)} t`;
  }, 100);
}

<<<<<<< HEAD
=======






>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
function loopFr(qtyCountry, qtyHab) {
  let gr = 0;
  let dGr = 0;
  let cGr = 0;
  let kg = 0;

  let poid = 0;

  setInterval(function () {
    poid += qtyCountry / 10;
    cardResultFrance.textContent = `${parseInt(poid)} t`;
  }, 100);

  setInterval(function () {
    gr += qtyHab;
    if (gr >= 10) {
      dGr += 1;
      gr = gr - 10;
    }
    if (dGr > 9) {
      cGr += 1;
      dGr = 0;
    }
    if (cGr > 9) {
      kg += 1;
      cGr = 0;
    }
    result = `${kg}.${cGr}${dGr}${parseInt(gr)} Kg`;
    cardResultFrancais.textContent = result;
  }, 1000);
}
