<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>


    <?php
        echo "<h2>Votre liste d'amis : <br></h2>";
        foreach($friendDisp as $friend){
            echo $friend["friend"] . "<br>";
        }
    ?>
</body>
</html>