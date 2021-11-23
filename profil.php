<!-- 
    
- Une page permettant de modifier son profil (profil.php) :

Cette page possède un formulaire permettant à l’utilisateur de modifier ses
informations. Ce formulaire est par défaut pré-rempli avec les informations
qui sont actuellement stockées en base de données. -->


<?php

$bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');

mysqli_set_charset($bdd , 'utf8');


if(isset($_POST['prenom'])&& isset($_POST['nom'])&& isset($_POST['login'])&& isset($_POST['password'])&&  isset($_POST['confirmepassword']))

{ 

$prenom = $_POST['prenom'];
$nom = $_POST['nom']; 
$login = $_POST['login']; 
$password = $_POST['password']; 
$password_confirme = $_POST['confirmepassword'];


$requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");

$hermione = mysqli_fetch_array($requete)

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css"> 
    
    <title>Profil</title>

</head>
<body class="bodyprofil">

<h1 class="h1profil">Bienvenu sur ton profil jeune terrien !</h1>

<div class="box-a">
<div class="inscri">


<form  method="post" action="profil.php" class="form" >

        <table>
            <tr>
                <td>Prénom</td>
                <td><input  type="text" name="prenom" value = "<?php echo $hermione ['prenom'];?>"></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value = "<?php echo $hermione ['nom'];?>"></td>
            </tr>
            <tr>
                <td>Login</td>
                <td><input type="text" name="login" value = "<?php echo $hermione ['login'];?>"></td>
            </tr>
            <tr>
                <td>Mot de Passe</td>
                <td><input type="password" name="password" value = "<?php echo $hermione ['password'];?>"></td>
            </tr>
            <tr>
                <td>Confirmer Mot de Passe</td>
                <td><input type="password" name="confirmepassword" value = "<?php echo $hermione ['confirmepassword'];?>"></td>
            </tr>
        </table>

</form>

<h2 class="h2profil"> <a href="deconnexion.php">Déconnexion</a> </h2>

</div>
</div>


</body>
</html>