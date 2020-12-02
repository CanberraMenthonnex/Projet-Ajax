<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Sign</h1>
    <?php
        if(isset($that_fcking_error)){
            echo $that_fcking_error;
        }
    ?>

    <form action="?page=homesign" method="post">
        <label for="firstname">Ton prénom<input type="text" name ="firstname"></label>
        <label for="lastname">Ton nom<input type="text" name ="lastname"></label>
        <label for="pseudo">Ton pseudo<input type="text" name ="pseudo"></label>
        <label for="email">Ton email<input type="email" name ="email"></label>
        <label for="password">Ton password(il doit comporter au moins 1 majuscule, 1 minuscule et 1 chiffre)<input type="text" name ="password"></label>
        <label for="checkPassword">Confirmes ton password<input type="text" name ="checkPassword"></label>
        <button type="submit">Envoyer</button>
    </form>


    <br>
        <a href="?page=home">Retour à l'accueil</a>
</body>
</html>