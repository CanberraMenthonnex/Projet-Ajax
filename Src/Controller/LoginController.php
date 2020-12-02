<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\UserModel;
use Core\Tools\Session;

class LoginController extends DefaultController{


    public function renderLogin(){
        $defControl = new DefaultController();
        return $defControl->render("login");
        // require ROOT."/Src/View/Home.php";
    }

    
    public function logOut(){
        $userInfos = new UserModel($_SESSION["email"], $_SESSION["password"]);
        $userInfos->update('user', 'status', '0');
        $session = new Session();
        var_dump($session->clean($_SESSION['firstname']));
        //$this->renderLogin();
    }

    public function log(){
        if($this->checkPostKeys($_POST,["email","password"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $userInfos = new UserModel($email, $password);
            $compare = $userInfos->searchId();
            if($compare){
                if($compare["password"] == $password){
                    Session::set($compare);
                    $session = $_SESSION;
                    $userInfos->update('user', 'status', '1');
                    $sendFname = $compare['firstname'];
                    return $this->render('home', compact("session", "sendFname"));


                }else{
                    $msgErrorLog = "Identifiant et/ou mot de passe incorrect";
                }
            }else{
                $msgErrorLog = "Identifiant et/ou mot de passe incorrect";
            }
        }else{
            $msgErrorLog = "Renseignez tous les champs pour vous connecter";

        }
        if (isset($msgErrorLog)){
            return $this->render('login', compact("msgErrorLog"));
        }
       
    }
}             
