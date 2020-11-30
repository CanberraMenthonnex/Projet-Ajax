<?php

namespace Src\Models;

// use Model\Model;

class UserModel extends Model{

    // protected $firstname;
    // protected $lastname;
    // protected $pseudo;
    protected $email;
    protected $pwd;
    // protected $status = 0;

    public function __construct(/*$firstname, $lastname, $pseudo,*/ $email, $pwd)
    {
        parent::__construct();
        // $this->firstname = $firstname;
        // $this->lastname = $lastname;
        // $this->pseudo = $pseudo;
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

    /**
     * Get the value of name
     */ 
    public function getName()
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