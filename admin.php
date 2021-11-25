<!-- 
    
- Une page d’administration (admin.php) :

Cette page est accessible UNIQUEMENT pour l’utilisateur “admin”. Elle
permet de lister l’ensemble des informations des utilisateurs présents dans
la base de données. -->


<?php

session_start();

$bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');

mysqli_set_charset($bdd , 'utf8');

    $requete = mysqli_query($bdd,"SELECT * FROM utilisateurs ");
    $resultat =mysqli_fetch_all ($requete);



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" type="text/css" href="style1.css"> 

</head>
<body class="bodyadmin">

            <h1 class="h1admin">BIENVENUE DANS L'ADMINISTRATION</h1>


<div class="middle">

    <table>
        <thead>
    
                    <th>ID</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Login</th>
                    <th>Password</th>   
                
        </thead> 

        <br>

            <tbody> 

    <?php foreach ($resultat as $key) { ?> 

                <tr>
                    <td><?= $key[0]?></td> 
                    <td><?= $key[2]?></td>
                    <td><?= $key[3]?></td>
                    <td><?= $key[1]?></td>
                    <td><?= $key[4]?></td>
                </tr>
    <?php    
    } 
    ?>
    
        </tbody>
    </table>
</div>


</body>
</html>

