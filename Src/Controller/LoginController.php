<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Model\UserModel;

class LoginController extends DefaultController{


    public function renderLogin(){
        $defControl = new DefaultController();
        return $defControl->render("login");
        // require ROOT."/Src/View/Home.php";
    }



    public function log(){
        if($this->checkPostKeys($_POST,["email","password"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $userInfos = new UserModel($email, $password);
            if($userInfos){
                if($userInfos->getPwd() == $password){
                    echo 'ok';
                }
                else{
                    echo 'k0000000000000000000000000000000';
                }
            }else{
                echo 'Pas de user correspondant à ces infos';
            }
        }
    }
}             
