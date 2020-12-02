
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/style.css">
    <title>Home Page</title>
</head>
<body>

    <h1>Page d'acceuil</h1>

    <?php 

        if(isset($_SESSION['firstname'])){
            
        
            echo "Bonjour " . $_SESSION['firstname'] . ", alias : " . $_SESSION['pseudo'];
            echo "<br><a href=?page=profil>Votre page profil</a>";
        }else{
            echo "<a id='doIt' href=?page=login>Connect your self</a>";
        }

    ?>

    <article id="surveyList">
        <h2>La liste des sondages de vos amis :</h2>

    </article>

    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/home.js"></script>
</body>

</html>

