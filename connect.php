<?php

// Quand je veux passer d'une base de données à l'autre je passe par ce fichier 


// BASE PLESK
// $bdd = mysqli_connect('localhost', 'Yanis_Khiter', 'Maxi13013', 'yanis-khiter_moduleconnexion'); 

// MA BASE LOCALE
$bdd = mysqli_connect('localhost', 'root', '', 'yanis-khiter_moduleconnexion'); 

mysqli_set_charset($bdd , 'utf8');


?>