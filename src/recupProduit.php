<?php
echo 'recupProduit<br />';
$designation = filter_input(INPUT_POST,'designation',FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
$prixHTT = filter_input(INPUT_POST,'prixHTT',FILTER_VALIDATE_FLOAT);
if (empty($prixHTT)) {
    errorMessage('Veuillez saisir un prix');
} else {
    if ($prixHTT===false) {
        $prixHTT='Le prix est pas valide !';
    } else {
        echo "Designation: $designation <br /> Description: $description <br /> PrixHTT: $prixHTT";
    }
}
