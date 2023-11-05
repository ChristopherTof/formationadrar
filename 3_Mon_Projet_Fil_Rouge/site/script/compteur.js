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
    console.log(gr);
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
    sTPun.textContent = parseInt(poid);
  }, 100);
}
// Affichage du tooltip à l'endroit de la souris
map.addEventListener('click', (evt) => {
  let mouseX = evt.clientX + +window.scrollX; //propriété d'un mouseEvent qui donne la coordonée horizontale de la souris par rapport à la fenetre d'affichage (soit le 0,0 de la fenetre du nav)
  let mouseY = evt.clientY + window.scrollY; //propriété d'un mouseEvent qui donne la coordonée verticale de la souris par rapport à la fenetre d'affichage (soit le 0,0 de la fenetre du nav)

  // initialisation de la récupération du target
  let cible = evt.target.id;
  console.log(cible); // renvoi FR

  if (tooltip.style.display == 'none') {
    tooltip.style.display = 'block';
    tooltip.style.transition = 'opacity 0.5s ease-in';
    tooltip.style.opacity = '1';
    tooltip.style.top = mouseY - (toolH + 10) + 'px';
    tooltip.style.left = mouseX - 60 + 'px';
  } else if (tooltip.style.display != 'none') {
    tooltip.style.display = 'none';
  }

  map.addEventListener('mouseleave', () => {
    console.log(cible);
    setTimeout(() => {
      tooltip.style.display = 'none';
    }, 8000);
  });
});
