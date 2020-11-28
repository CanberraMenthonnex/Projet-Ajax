<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class AddSurveyController extends DefaultController{
    public function renderAddSurvey(){
        $defControl = new DefaultController();
        return $defControl->render("addSurvey");
        // require ROOT."/Src/View/Home.php";
    }
}