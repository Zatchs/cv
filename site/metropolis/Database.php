<?php

try {
    //Connection à MySQL avec PDO (Php Data Objects)
    $bdd = new PDO('mysql:host=http://www.bdd-martin.simplon-charleville.fr;dbname=metropolis;charset=utf8mb4','dbo776286243', 'DFG34cvb78');
}
catch(Exception $e) {
    // Si ça marche pas
    die('Erreur : '.$e->getMessage());
}

?>
