<?php

namespace Model;

use DateTime;

class Friends{
    private $id;
    private $user_id;
    private $user_id2;

    /*
    * string
    */
    public function setId(string $id){
        $this->id = $id;
    }


    /*
    * string
    */
    public function setUserId(string $user_id){
        $this->user_id = $user_id;
    }

    /*
    * string
    */
    public function setUserId2(string $user_id2){
        $this->user_id2 = $user_id2;
    }

    /*
    * return string
    */
    public function getId(){
        return $this->id;
    }


    /*
    * return string
    */
    public function getUserId(){
        return $this->user_id;
    }


    /*
    * return string
    */
    public function getUserId2(){
        return $this->user_id2;
    }

}