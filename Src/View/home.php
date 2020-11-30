
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>

    <h1>Hello World</h1>

    <?php 


        if(isset($_SESSION)){
            echo "Bonjour " . $_SESSION['firstname'] . ", alias : " . $_SESSION['pseudo'];
            echo "<a href=?page=profil>Votre page profil</a>";
        }else{
            echo "<a href=?page=login>Just do it</a>";
        }

    ?>



</body>
</html>

