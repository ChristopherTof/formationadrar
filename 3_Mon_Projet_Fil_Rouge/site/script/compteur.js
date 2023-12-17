//Initialisation des varibales
const body = document.querySelector('body');
const map = document.querySelector('#worldMap');
// Initialisation
const tooltip = document.querySelector('#tooltip');
tooltip.setAttribute('class', 'toooltip');
tooltip.style.display = 'none';
const sTPun = document.querySelector('#para .count');
const sTPDeux = document.querySelector('#para2 .count');

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
  fr: 10.2,
  // Valeur par habitants
  frP: 0.15,
};

let usa = {
  //Valeur pour le pays
  us: 102,
  // Valeur par habitants
  usP: 15,
};

//Lancement du compteur au chargement de la page (France)
window.addEventListener('load', () => {
  // cumulUser(france.frP);
  cumulUser(france.frP);
  sTPDeux.textContent = carbonCountry(france.fr);
});

////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////FONCTIONS COMPTEUR
////////////////////////////////////////////////////////////////////////////////////
//Fonction compteur information emission du User
//let chrono = window.setInterval(cumulUser(qty), 1000);

function cumulUser(qty) {
  let gr = 0;
  let dGr = 0;
  let cGr = 0;
  let kg = 0;

  setInterval(function () {
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
    sTPDeux.textContent = result;
  }, 1000);
}

//Compteur par pays
function carbonCountry(qty) {
  let poid = 0;

  setInterval(function () {
    poid += qty / 10;
    sTPun.textContent = `${parseInt(poid)} t`;
  }, 100);
}

//AFFICHAGE DU TOOLTIP A L'ENDROIT DE LA SOURIS

map.addEventListener('click', (evt) => {
  // initialisation de la récupération du target
  let cible = evt.target.id;
  let cible2 = evt.target;

  //ACTIVATION DES FONCTIONS COMPTEUR EN FONCTION DU PAYS
  switch (cible) {
    case 'FR':
      console.log('France');
      break;

    case 'US':
      console.log('US');
      break;

    default:
      console.log('not a good country');
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
