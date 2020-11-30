<?php

namespace Model;

use DateTime;

class SurveyModel{

    private string $id;
    private string $question;
    private string $answers;
    private string $user_answers;

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
    public function setQuestion(string $question){
        $this->question = $question;
    }

    /*
    * string
    */
    public function setAnswers(string $answers){
        $this->answers = $answers;
    }


    /*
    * string
    */
    //Utile ? 
    public function setUserAnswers(string $user_answers){
        $this->user_answers = $user_answers;
    }

    /*
    * string
    */
    public function getId(){
        return $this->id;
    }


    /*
    * string
    */
    public function getQuestion(){
        return $this->question;
    }

    /*
    * string
    */
    public function getAnswers(){
        return $this->answers;
    }

    /*
    * string
    */
    public function getUserAnswers(){
        return $this->user_answers;
    }

}



    