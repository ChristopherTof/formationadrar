function verifCondi (){
    let nbr1 = parseInt(prompt("Veuillez entrer le chiffre 1"));
    let nbr2 = parseInt(prompt("Veuillez entrer le chiffre 2"));
    if( isNaN(nbr1) || isNaN(nbr2)){
        console.log("Une des valeurs n'est pas un chiffre.")
    } else if (nbr1 > 0 && nbr2 > 0 || nbr1 < 0 && nbr2 < 0){
        console.log("Le résultat de l'opération sera positif");
    } else if (nbr1 > 0 && nbr2 < 0 ||nbr1 < 0 && nbr2 > 0 ){
        console.log("Le résultat de l'opération sera négatif");
    } else if ( nbr1 == 0 || nbr2 == 0){
        console.log ("Le résultat sera égale à 0")
    }
    

}
verifCondi();
