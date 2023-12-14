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

//initialisation des chiffres d'émission a la seconde par pays (valeur tonnes)
let fr = 10.2;

// Compteur à la seconde pour un utilisateur français (appliqué dès le chargement de la page)
//Lancement du compteur au chargement de la page
window.addEventListener('load', () => {
  cumulUser(0.15);
  carbonCountry(fr);
});

//Fonction compteur information emission du User Français
function cumulUser(qty) {
  let gr = 0;
  let dGr = 0;
  let cGr = 0;
  let kg = 0;

  setInterval(function () {
    sTPDeux.textContent = `${kg}.${cGr}${dGr}${parseInt(gr)} Kg`;
    gr += qty;
    //console.log(gr);
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
// Affichage du tooltip à l'endroit de la souris
map.addEventListener('click', (evt) => {
  let mouseX = evt.clientX + +window.scrollX; //propriété d'un mouseEvent qui donne la coordonée horizontale de la souris par rapport à la fenetre d'affichage (soit le 0,0 de la fenetre du nav)
  let mouseY = evt.clientY + window.scrollY; //propriété d'un mouseEvent qui donne la coordonée verticale de la souris par rapport à la fenetre d'affichage (soit le 0,0 de la fenetre du nav)

  // initialisation de la récupération du target
  let cible = evt.target.id;
  let cible2 = evt.target;
  console.log(cible); // renvoi FR

  if (tooltip.style.display == 'none') {
    tooltip.style.display = 'block';
    tooltip.style.top = mouseY - (toolH + 10) + 'px';
    tooltip.style.left = mouseX - 58 + 'px';
  } else if (tooltip.style.display != 'none') {
    tooltip.style.display = 'none';
  }

  // Test timing à la sortie de la souris
  // cible2.addEventListener('mouseenter', () => {
  //   setTimeout((tooltip.style.display = 'none'), 1000);
  // });
});

//Debut debut de l'année
let tInstant = new Date();
let currentYear = tInstant.getFullYear();
let startYear = new Date(currentYear, 0, 1);
console.log(startYear);
console.log(tInstant);

function getHour() {
  setInterval(function () {
    let tInstant = new Date();
    //console.log(tInstant);
    let ecoule = parseInt((tInstant.getTime() - startYear.getTime()) / 1000 / 3600 / 24);
    //let debAn = fr * 3600 * 24 * ecoule;
    console.log(`Depuis le debut de l'année, il s'est écoulé ${ecoule} Jours `);
    //console.log(debAn++);
  }, 1000);
}
getHour();
