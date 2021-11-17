<!-- 
    
- Une page contenant un formulaire d’inscription (inscription.php) :

Le formulaire doit contenir l’ensemble des champs présents dans la table
“utilisateurs” (sauf “id”) + une confirmation de mot de passe. Dès qu’un
utilisateur remplit ce formulaire, les données sont insérées dans la base de
données et l’utilisateur est redirigé vers la page de connexion. -->


<?php

if(isset($_POST['prenom'])&& isset($_POST['nom'])&& isset($_POST['password'])&& isset($_POST['confirmepassword'])){

  $prenom = $_POST['prenom'];
  
  $nom = $_POST['nom']; 

  $login = $_POST['login']; 

  $password = $_POST['password']; 

  $password_confirm = $_POST['confirmepassword'];
  

  if($password == $password_confirm){  
    header('Location:connexion.php');

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
    <link rel="stylesheet" type="text/css" href="style.css"> 

</head>
<body>
    

<div class="box-a">
    <div class="inscri">  

        <h2>Inscrivez-vous</h2>

        <form class="form" action = "" method ="post">

            <div class="prenom">
                <label>Prenom</label>
                <input type ="text" name="prenom" >
            </div>
           
            <div class="nom">
                <label>Nom</label>
                <input type ="text" name="nom" >
            </div>
            
            <div class="log">
                <label>Login</label>
                <input type ="text" name="login" >
            </div>
           
            <div class="mdp">
                <label>Mot de Passe</label>
                <input type ="text" name="password">
            </div>
                
            <div class="confirmmd">
                <label>Confirmez Mot de Passe</label>
                <input type ="text" name="confirmepassword" >
            </div>

                <button type="submit" class="btn btn-primary"> Inscription </button>

        </form>
        
    </div>
</div>


</body>
</html>




