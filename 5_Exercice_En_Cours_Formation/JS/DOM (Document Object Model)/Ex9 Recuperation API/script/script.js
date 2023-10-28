//  Initialisation des éléments du DOM
const town = document.querySelector('#nom');
const weather = document.querySelector('#temp');
const temperature = document.querySelector('#temperature');
const btn = document.querySelector('#envoyer');

const img = document.createElement('img');

//https://api.openweathermap.org/data/2.5/weather?q=ville&appid=6f88826d767f323ad19cd282444924e9

//Création de l'action au clic bouton
btn.addEventListener('click', () => {
  //Récupération de la valeur de l'input ville
  const villeInput = document.querySelector('#villeInput').value;

  // Initialisation du chemin de l'api
  let ville = `https://api.openweathermap.org/data/2.5/weather?q=${villeInput}&appid=6f88826d767f323ad19cd282444924e9`;
  //fonction récupérer la météo
  const meteo = fetch(ville).then(async (response) => {
    //Affichera les information de connexion
    console.log(response);
    //condition de si le lien n'est pas un 404
    if (response.status === 200) {
      // Récupération des information JSON
      const json = await response.json();
      //récupération des informations
      let targetTown = json.name;
      let targetTemp = json.main.temp - 273.15;
      let targetWeather = json.weather[0].main;
      let icoWeather = json.weather[0].icon;

      //Affichage des élément sur le Html
      town.textContent = 'Ville : ' + targetTown;
      weather.textContent = 'Température : ' + targetTemp.toFixed(1) + ' °';
      temperature.textContent = 'Temps : ' + targetWeather;
      temperature.appendChild(img);
      img.src = `https://openweathermap.org/img/wn/${icoWeather}@2x.png`;
    }
    if (response.status === 404) {
      town.textContent = ` La ville ${villeInput} n'existe pas`;
      weather.textContent = '';
      temperature.textContent = '';
      weather.appendChild(img);
      img.src = './error.gif';
    }
  });
});
