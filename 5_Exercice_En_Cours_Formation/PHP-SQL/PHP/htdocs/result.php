<?php
if(isset($_POST["submit2"])){
    if (!empty($_POST["prenom"]) AND !empty($_POST["nom2"]) AND !empty($_POST["email"])){
        if(isset($_POST)){
            var_dump($_POST);
        }
        echo "La valeur de l'input est : ".$_POST['nom2'].'<br>';
        echo "La valeur de l'input est : ".$_POST['prenom'].'<br>';
        echo "La valeur de l'input est : ".$_POST['email'].'<br>';
    } else {
        header("Location:./index_form_get_post.php?error");
    }
    
};
?>