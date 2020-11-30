<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <section>
        <form action="?page=logCheck" method="post">
            <input type="email" placeholder="Email" name='email'>
            <input type="pwd" placeholder="Password" name="password">
            <button type="submit">Connexion</button>
        </form>
    </section>

    <?= "<a href=" . $_GET["page"] = "?page=sign" . ">Pas encore de compte</a>"; 
        
    ?>


</body>
</html>