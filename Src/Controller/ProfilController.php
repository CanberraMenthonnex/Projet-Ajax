<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class ProfilController extends DefaultController{

    public function renderProfil(){
        $defControl = new DefaultController();
        return $defControl->render("profil");
        // require ROOT."/Src/View/Home.php";
    }


    public function displayFriend($profil){
        
    }
}