<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/addSurvey.css">
    <title>Add Survey</title>
</head>
<body>
    <main>
        <h1>Add Survey</h1>

        <form id="newSurvey" action="" method="post">
            <label for="">Votre question<input type="text" name="question" id=""></label>
            <label for="">Choix: 1<input type="text" name="question" id="A1"></label>
            <label for="">Choix: 2<input type="text" name="question" id="A2"></label>
            <label for="">Choix: 3<input type="text" name="question" id="A3"></label>
            <label for="">Choix: 4<input type="text" name="question" id="A4"></label>

            <button id="sendForm" type="submit">Créer</button>
        </form>

        <button id="resetButton">Reset</button>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/newSurvey.js"></script>
</body>
</html>