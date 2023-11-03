const map = document.querySelector('#worldMap');

const france = map.querySelector('#FR');
const usa = map.querySelector('#US');

france.addEventListener('click', () => {
  console.log('Tu as cliqué sur la france !');
});

usa.addEventListener('click', () => {
  console.log('Tu as cliqué sur les USA !');
});

// const test = document.querySelector('#compteur');

// let gr = 0;
// let dGr = 0;
// let cGr = 0;
// let kg = 0;

// function timer() {
//   test.textContent = `Depuis que vous êtes sur cette pages, ${kg}.${cGr}${dGr}${gr}Kg Co2 ont été émis par un français`;
//   setInterval(function () {
//     test.textContent = `Depuis que vous êtes sur cette pages, ${kg}.${cGr}${dGr}${parseInt(gr)}Kg Co2 ont été émis par un français`;
//     gr = gr + 1.5;

//     if (gr >= 10) {
//       gr = 0;
//       dGr += 1;
//     }
//     if (dGr > 9) {
//       dGr = 0;
//       cGr += 1;
//     }
//     if (cGr > 9) {
//       cGr = 0;
//       kg += 1;
//     }
//   }, 10000);
// }
// timer();
