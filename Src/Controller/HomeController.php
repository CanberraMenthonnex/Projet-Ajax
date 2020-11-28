<?php

namespace Src\controller;



use Core\Controller\DefaultController;

class HomeController extends DefaultController{

    public function renderHome(){
        $defControl = new DefaultController();
        return $defControl->render("home");
        // require ROOT."/Src/View/Home.php";
    }
}


