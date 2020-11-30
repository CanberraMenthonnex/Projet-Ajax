<?php

namespace Model;

use DateTime;

class Chat{
    private string $id;
    private string $pseudo;
    private string $time;
    private string $Title;
    private string $message;

    public function __construct()
    {
        $this->time = new DateTime();
    }

    /*
    * string
    */
    public function setId(string $id){
        $this->id = $id;
    }

    /*
    * string
    */
    public function setPseudo(string $pseudo){
        $this->pseudo = $pseudo;
    }

    /*
    * string
    */
    public function setTitre(string $Titre){
        $this->Titre = $Titre;
    }

    /*
    * string
    */
    public function setMessage(string $message){
        $this->message = $message;
    }


    /*
    * return string
    */
    public function getId(): string
    {
        return $this->id;
    }

    /*
    * return string
    */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /*
    * return string
    */
    public function getTitre(): string
    {
        return $this->Titre;
    }

    /*
    * return string
    */
    public function getMessage(): string
    {
        return $this->message;
    }
}