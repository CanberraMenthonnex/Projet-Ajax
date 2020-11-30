<?php

use Src\Controller\{
    AddSurveyController,
    FriendController,
    HomeController,
    LoginController,
    ProfilController,
    ResultController,
    SignController
};


if(array_key_exists("page", $_GET)){
    switch ($_GET["page"]) {

        // Méthode GET => affichage de page
        case 'addSurvey':
            $controller = new AddSurveyController();
            $controller->renderAddSurvey();
            break;
        case 'friendList':
            $controller = new FriendController();
            $controller->renderFriend();
            break;
        case 'home':
            $controller = new HomeController();
            $controller->renderHome();
            break;
        case 'login':
            $controller = new LoginController();
            $controller->renderLogin();
            break;
        case 'profil':
            $controller = new ProfilController();
            $controller->renderProfil();
            break;
        case 'result':
            $controller = new ResultController();
            $controller->renderResult();
            break;
        case 'sign':
            $controller = new SignController();
            $controller->renderSign();
            break;


        // Méthode POST => traitement
        case 'logCheck':
            $controller = new LoginController();
            $controller->log();
            break;
        case 'homesign':
            $controller = new SignController();
            $controller->validateSign();
            break;

        default:
            echo "<====3";
            break;
    }
} else{
    $controller = new HomeController();
    $controller->renderHome();
}