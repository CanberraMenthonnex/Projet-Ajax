<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class AddSurveyController extends DefaultController{
    public function renderAddSurvey(){
        $defControl = new DefaultController();
        return $defControl->render("addSurvey");
        // require ROOT."/Src/View/Home.php";
    }

    public function postServey($data)
    {
        
        $prepare = $this->pdo->prepare("INSERT INTO survey (content) VALUES (:content)");
        $prepare->execute($data);
        echo json_encode("");
    }
}