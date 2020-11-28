<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class SignController extends DefaultController{

    public function renderSign(){
        $defControl = new DefaultController();
        return $defControl->render("sign");
        // require ROOT."/Src/View/Home.php";
    }
}