<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class ResultController extends DefaultController{

    public function renderResult(){
        $defControl = new DefaultController();
        return $defControl->render("result");
        // require ROOT."/Src/View/Home.php";
    }
}