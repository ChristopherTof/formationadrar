//Récupération du json dans la console :
//url de l'api
const ville = 'https://api.openweathermap.org/data/2.5/weather?q=ville&appid=6f88826d767f323ad19cd282444924e9';
//fonction récupérer la météo
const meteo = fetch(ville).then(async (response) => {
  //récupération du json
  const json = await response.json();
  //affichage du json dans la console
  console.log(json);
});
