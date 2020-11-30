<?php session_start();
$_SESSION = $session;
$_SESSION['Name'] = array_keys($_SESSION);

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
    
    // echo "<pre>";    
    //     var_dump($_SESSION[$sendFname]);
    // echo "<pre>";
    

        if(isset($_SESSION['Name'])){
            echo "Bonjour " . $_SESSION['Name'][0] . ", alias : " . $_SESSION[$sendFname]['pseudo'];
        }else{
            echo "<a href=?page=login>Just do it</a>";
        }       
        
    ?>



</body>
</html>