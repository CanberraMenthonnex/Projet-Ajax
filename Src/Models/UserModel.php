<?php

namespace Src\Models;

// use Model\Model;

class UserModel extends Model{

    protected $email;
    protected $pwd;

    public function __construct($email, $pwd)
    {
        $this->email = $email;
        $this->pwd = $pwd;
    }


    // public function searchId(){
    //     $infos = $this->getOne("user", $this->name, "email");
    //     return $infos;
    // }
    public function searchId(){
        $model = new Model();
        $infos = $model->getOne('user', 'email',$this->email);
        return $infos;
    }

    public function searchFriend(){
        $model = new Model();
        $friends = $model->getAll("friends");
    }

    /**
     * Get the value of name
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of pwd
     */ 
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of pwd
     *
     * @return  self
     */ 
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }
}