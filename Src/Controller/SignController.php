<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Core\Tools\ValidatorString;

class SignController extends DefaultController{

    public function renderSign(){
        return $this->render("sign");
        // require ROOT."/Src/View/Home.php";
    }

    public function validateSign(){
        if($this->checkPostKeys($_POST, ['firstname', 'lastname', 'email', 'password', 'checkPassword']) && ($_POST['password'] === $_POST['checkPassword'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $validator = new ValidatorString($firstname);
            $validator
            ->validateString()
            ->validateLength(3, 20)
            ->validateNoSpecialChar(); 
            $validator_error[] = $validator->getError();



            $validator = new ValidatorString($lastname);
            $validator
            ->validateString()
            ->validateLength(3, 50)
            ->validateNoSpecialChar(); 
            $sign_error[] = $validator->getError();
            
            $validator = new ValidatorString($email);
            $validator
            ->validateEmail(); 
            $validator_error[] = $validator->getError();

            $validator = new ValidatorString($password);
            $validator
            ->validatePwd();
            $sign_error[] = $validator->getError();

            $sign_error = array_values(array_filter($sign_error));

            if(!$sign_error){
                // $model = new UserModel();
                // $model->addUser();
                return $this->render('home');   

            }else{
                $that_fcking_error = $sign_error[0][0];                
            }
       }else{
        $that_fcking_error = "Veuillez renseigner tous les champs et/ou faire correspondre les mdp plz";
       }  
       return $this->render('sign', compact("that_fcking_error"));   
   }

}