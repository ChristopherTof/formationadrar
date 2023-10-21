console.log("Hello World");
let hihi = "(et moi je suis la variable appelé)";

//Donnée de type texte : 
var text = "texte ${hihi}"; // Anncienne version, sa portée est plus grande donc plus dangeureuse
let text2 = 'texte 2'; // Nouvelle version la plus utilsé maintenant
let text3 = `Je suis aussi un texte ${hihi}`

console.log(text3);
//Donnée de type Nombre
let texNbr = 3;

// Données de type Boolean
let textBool = false;

// Ex1 Ecrivez un algorithme qui va interchanger  la valeur de 2 variables nb1 et nb2

let nb1=10;
let nb2= 5;

let nb3 = nb1;

function interChange (){
    console.log("Le nombre 1 est : "+ nb1);
    console.log("Le nombre 2 est : "+ nb2);
    nb1 = nb2;
    nb2 = nb3;
    console.log("Le nombre 1 est : "+ nb1);
    console.log("Le nombre 2 est : "+ nb2);
}

interChange();