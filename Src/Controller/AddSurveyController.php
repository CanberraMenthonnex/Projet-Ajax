<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\SurveyModel;

class AddSurveyController extends DefaultController{
    public function renderAddSurvey(){
        $defControl = new DefaultController();
        return $defControl->render("addSurvey");
        // require ROOT."/Src/View/Home.php";
    }

    public function postSurvey($data)
    {   
        $envoi = new SurveyModel();
        $envoi->sendSurvey($data);
        echo json_encode("");
    }
}