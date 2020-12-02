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

    <h2>Lances toi et ajoutes un sondage</h2>
    <a href="?page=addSurvey">Hello there</a>

    <?php
        echo "<h2>Votre liste d'amis : <br></h2>";
        foreach($friendDisp as $friend){
            echo $friend["friend"] . "<br>";
        }
    ?>

    
    <article>
        <h2>Add friend</h2>
        <form>
            <label for="addFriend">Ajout d'un ami<input type="text" name="addFriend" id="inputAddFriend" placeholder="email de votre ami"></label>
            <button type="submit" id="buttonSearch">Recherchez</button>
        </form>
    </article>

<script src="./js/addFriend.js"></script>
</body>
</html>