<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Core\Tools\ValidatorString;

class SignController extends DefaultController{

    public function renderSign(){
        $defControl = new DefaultController();
        return $defControl->render("sign");
        // require ROOT."/Src/View/Home.php";
    }

    public function validateSign(){
        if($this->checkPostKeys($_POST, ['firstname', 'lastname', 'email', 'passord'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];




            $validator = new ValidatorString($email);
            $validator
            ->validateEmail(); 
            $validator_error[] = $validator->getError();

            $validator = new ValidatorString($password);
            $validator
            ->validatePwd();
            $sign_error[] = $validator->getError();

       }        
   }

}