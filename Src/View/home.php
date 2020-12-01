
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/style.css">
    <title>Home Page</title>
</head>
<body>


    <?php 


        if(isset($_SESSION['name'])){
            echo "Bonjour " . $_SESSION['firstname'] . ", alias : " . $_SESSION['pseudo'];
            echo "<a href=?page=profil>Votre page profil</a>";
        }else{
            echo "<a id='doIt' href=?page=login>Just do it</a>";
        }

    ?>
</body>
</html>

