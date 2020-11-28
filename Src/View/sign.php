<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <label for="email">Ton email<input type="email" name ="email"></label>
        <label for="password">Ton password<input type="text" name ="password"></label>
        <label for="checkPassword">Confirmes ton password<input type="text" name ="checkPassword"></label>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>