<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class LoginController extends DefaultController{

    public function renderLogin(){
        $defControl = new DefaultController();
        return $defControl->render("login");
        // require ROOT."/Src/View/Home.php";
    }
}