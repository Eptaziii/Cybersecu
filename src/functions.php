<?php
function error(){
    echo '<h1>Erreur sur le site</h1>';
}
function errorMessage($text){
    echo "<div class=\"alert alert-danger\" role=\"alert\">
    $text
    </div>";
}