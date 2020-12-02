<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\UserModel;
use Src\Models\Model;


class ProfilController extends DefaultController{

    public function renderProfil(){
        $defControl = new DefaultController();
        return $defControl->render("profil");
        // require ROOT."/Src/View/Home.php";
    }


    public function displayFriend(){

        $email= $_SESSION["email"];
        $pwd = $_SESSION["password"];

        $friendList = new UserModel($email,$pwd);
        $friendDisp = $friendList->findFriend();
        return $this->render("profil",compact("friendDisp"));
    }

    public function searchFriend($friend){
        $query = new Model();
        $find = $query->getOne("user", "email", $friend);
        if($find === false){
            echo json_encode("false");
        }else{
            $query->addFriend("friend", $_SESSION["email"], $friend);
            $query->addFriend("friend", $friend, $_SESSION["email"]);
            echo json_encode("");
        }

    }
}