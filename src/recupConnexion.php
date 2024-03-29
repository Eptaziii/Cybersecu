<?php
echo 'recupConnexion<br />';
$nom = filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING);
$mdp = $_POST['mdp'];
$hash = password_hash($mdp,PASSWORD_DEFAULT);
if (empty($nom)){
    errorMessage("Entrez un login");
} else {
    if (empty($mdp)) {
        errorMessage("Entrez un mot de passe");
    } else {
        if (strlen($mdp)<12) {
            errorMessage("Nombre de caractères inférieur à 12");
        } else {
            if(preg_match('/\d/',$mdp)==false){
                errorMessage("Aucun chiffre dans le mot de passe");
            } else {
                if (preg_match('/[A-Z]/',$mdp)==false) {
                    errorMessage("Aucune lettre majuscule dans le mot de passe");
                } else {
                    if (preg_match('/[a-z]/',$mdp)==false) {
                        errorMessage("Aucune lettre minuscule dans le mot de passe");
                    } else {
                        if (preg_match('/[^a-zA-Z\d]/',$mdp)==false) {
                            errorMessage("Aucun caractère spécial dans le mot de passe");
                        } else {
                            echo "Login: $nom <br /> Mdp: $hash";
                            if ($nom=="edignoire") {
                                $solution = '$2y$10$ACNcsAgU3GRbV.kXDclZFOI0Jj5kR/NEcxDwgunpwqHoJoK6dd/IC';
                                $verify = password_verify($mdp,$solution);
                                if ($verify) {
                                    successMessage("Connecté");
                                } else {
                                    errorMessage("Pas le bon mdp");
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
