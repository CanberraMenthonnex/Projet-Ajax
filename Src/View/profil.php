<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/style.css">
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
    <a href="?page=logout">Déconnexion</a>

    <h2>Lances toi et ajoutes un sondage</h2>
    <a href="?page=addSurvey">Ajouter un sondage</a>

    <?php
        echo "<h2>Votre liste d'amis : <br></h2>";
        foreach($friendDisp as $friend){
            echo $friend["friend"] . "<br>";
        }
    ?>
</body>
</html>