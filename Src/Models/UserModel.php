<?php

namespace Model;

use Model\Model;

class UserModel extends Model{

    private $name;
    private $pwd;

    public function __construct($name, $pwd)
    {
        $this->name = $name;
        $this->pwd = $pwd;
    }


    public function searchId(){
        $infos = $this->getOne("user", $this->name);
        return $infos;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
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
    public function setName($name)
    {
        $this->name = $name;

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