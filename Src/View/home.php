<?php session_start();
$_SESSION = $session;
$_SESSION['Name'] = array_keys($_SESSION);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>

    <h1>Home Page</h1>

    <?php 
    
    // echo "<pre>";    
    //     var_dump($_SESSION[$sendFname]);
    // echo "<pre>";
    

        if(isset($_SESSION['Name'])){
<<<<<<< HEAD
            echo "Voici la liste de vos amis";
            echo "<a href=?page=profil>Votre profil</a"
    ?>

    <?php
=======
            echo "Bonjour " . $_SESSION['Name'][0] . ", alias : " . $_SESSION[$sendFname]['pseudo'];
>>>>>>> 00df4483af5719fd16506ccde31ff946e95980bc
        }else{
            echo "<a href=?page=login>Connexion</a>";
        } 
    ?>    
        
    



</body>
</html>