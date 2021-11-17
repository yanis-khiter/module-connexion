<!-- 
    
- Une page contenant un formulaire de connexion (connexion.php) :

Le formulaire doit avoir deux inputs : “login” et “password”. Lorsque le
formulaire est validé, s’il existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme connecté et une (ou
plusieurs) variables de session sont créées. -->





<?php

if(isset($_POST['login'])&& isset($_POST['password'])){


  $login = $_POST['login']; 

  $password = $_POST['password']; 
  

  if($password == $password_confirm){  

}
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module de connexion</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 

</head>
<body>

    <div class="box-b">
        <div class="connect"> 

            <h2>Connectez-vous</h2>

            <form class="form" action = "" method ="post">

                <div class="log2">
                    <label>Login</label>
                    <input type ="text" name="prenom" >
                </div>

                <div class="mdp2">
                    <label>Mot de Passe</label>
                    <input type ="text" name="nom" >
                </div>

                    <button type="submit" class="btn btn-primary"> Connexion </button>
                
            </form>

        </div> 
    </div>
  

</body>
</html>



 

 