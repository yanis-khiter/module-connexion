<!-- 
    
- Une page contenant un formulaire d’inscription (inscription.php) :

Le formulaire doit contenir l’ensemble des champs présents dans la table
“utilisateurs” (sauf “id”) + une confirmation de mot de passe. Dès qu’un
utilisateur remplit ce formulaire, les données sont insérées dans la base de
données et l’utilisateur est redirigé vers la page de connexion. -->


<?php

include 'connect.php' ;

$message = '';

if(isset($_POST['prenom'])&& isset($_POST['nom'])&& isset($_POST['login'])&& isset($_POST['password'])&&  isset($_POST['confirmepassword']))

{ 

$prenom = $_POST['prenom'];
$nom = $_POST['nom']; 
$login = $_POST['login']; 
$password = $_POST['password']; 
$password_confirme = $_POST['confirmepassword'];


$requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");


  
$resultat = mysqli_fetch_all($requete);

    if ($password != $password_confirme) {
        $message = 'Les deux mots de passes ne sont pas identique'; } 

    elseif (count($resultat) != 0){
        $message='Login déjà pris !'; } 

    else {

    $requete = mysqli_query($bdd, "INSERT INTO utilisateurs(prenom, nom, login, password) VALUES ('$prenom','$nom','$login','$password') ");

    header('Location: connexion.php');

}
}


?>   

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mondule d'inscription</title>
    <link rel="stylesheet" type="text/css" href="style1.css"> 

</head>
<body>

<div class="box-a">
    <div class="inscri">  

        <h1>Inscrivez-vous</h1>

        <p>Bienvenue dans SpaceLand, prêt à decoller  ? Inscrivez-vous. Sinon <a href="connexion.php"> connectez-vous.</a></p>

        <form method="post" action="inscription.php" class="form" >

            <table>
                <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" placeholder='Exemple : "Yanis..."'></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" placeholder='Exemple : "Khiter..."'></td>
                </tr>
                <tr>
                    <td>Login</td>
                    <td><input type="text" name="login" placeholder='Exemple : "Yanis13..."'></td>
                </tr>
                <tr>
                    <td>Mot de Passe</td>
                    <td><input type="password" name="password" placeholder='Exemple : "****..."'></td>
                </tr>
                <tr>
                    <td>Confirmer Mot de Passe</td>
                    <td><input type="password" name="confirmepassword" placeholder='Exemple : "****..."'></td>
                </tr>
            </table>

                <div id="button">
                <input type="submit"value="S'inscrire">
                </div>  

                <?php
                echo "<p class='msg'>". $message. '</p>' ;
                ?>

        </form>
    </div>
</div>




</body>
</html>




