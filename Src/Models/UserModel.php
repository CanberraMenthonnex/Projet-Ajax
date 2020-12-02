<?php

namespace Src\Models;

class UserModel extends Model{

    protected $email;
    protected $pwd;


    public function __construct(/*$firstname, $lastname, $pseudo,*/ $email, $pwd)
    {
        parent::__construct();
        $this->email = $email;
        $this->pwd = $pwd;
    }


    // public function searchId(){
    //     $infos = $this->getOne("user", $this->name, "email");
    //     return $infos;
    // }
    public function searchId(){
        // $model = new Model();
        $infos = $this->getOne('user', 'email',$this->email);

        return $infos;
    }

    public function addUser(array $infos){
        $this->insert('user', $infos);
    }

    public function setConnection(){
        $this->update('user', 'status', '1');
    }

    public function findFriend(){
        return $this->getAll("friends", 'user_email',$_SESSION["email"]);
    }

    public function getSurvey($userEmail){
        return $this->getFriendSurvey($userEmail);
    }
}