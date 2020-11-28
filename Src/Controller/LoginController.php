<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class LoginController extends DefaultController{


    public function renderLogin(){
        $defControl = new DefaultController();
        return $defControl->render("login");
        // require ROOT."/Src/View/Home.php";
    }



    public function log(){
        if(isset($_POST["email"],$_POST["password"])){
            echo "Test !!";
        }else{
            echo 'pas test';
        }
    }
}