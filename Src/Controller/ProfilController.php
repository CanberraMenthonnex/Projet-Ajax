<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Core\Tools\Session;
use Src\Models\UserModel;


class ProfilController extends DefaultController{

    public function renderProfil(){
        $defControl = new DefaultController();
        return $defControl->render("profil");
        // require ROOT."/Src/View/Home.php";
    }

    public function displayFriend(){

        $email= $_SESSION["email"];
        $pwd = $_SESSION["password"];

        $friendList = new UserModel($email,$pwd);
        $friendDisp = $friendList->findFriend();
        return $this->render("profil",compact("friendDisp"));
    }
}