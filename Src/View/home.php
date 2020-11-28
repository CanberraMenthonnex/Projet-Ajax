<?php session_start();
//$_SESSION['Name'] = null;
?>
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
        
        if(isset($_SESSION['Name'])){
            echo "Voici la liste de vos amis";
        }else{
            echo "<a href=" . $_GET["page"] = "?page=login" . ">Veillez vous connecter</a>";
        }
    
    ?>



</body>
</html>