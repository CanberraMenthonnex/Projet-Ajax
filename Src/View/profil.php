<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
    <a href="?page=logout">Déconnexion</a>

    <h2>Lances toi et ajoutes un sondage</h2>
    <a href="?page=addSurvey">Ajouter un sondage</a>

    <?php
        if(isset($_SESSION["firstname"])){
            echo "<h2>Votre liste d'amis : <br></h2>";
            foreach($friendDisp as $friend){
                echo $friend["friend"] . "<br>";
            }
        }else{

        }

    ?>

    <h2>Accéder aux avis de sondage</h2>
    <a href="?page=result">Voir avis</a>
    <h2>Retour à la homepage</h2>
    <a href="?page=home">retour à la page principale</a>
    
    <article>
        <h2>Add friend</h2>
        <form>
            <label for="addFriend">Ajout d'un ami<input type="text" name="addFriend" id="inputAddFriend" placeholder="email de votre ami"></label>
            <button type="submit" id="buttonSearch">Recherchez</button>
            <p id="message">Message: </p>
        </form>
    </article>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/addFriend.js"></script>
</body>
</html>