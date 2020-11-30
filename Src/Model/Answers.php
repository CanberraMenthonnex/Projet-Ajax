<?php

namespace Model;

class Answers{
    private string $id;
    private string $survey;
    private string $user;
    private string $answer_number;
    private string $question_number;


    /*
    * string
    */
    public function setId(string $id){
        $this->id = $id;
    }

    /*
    * string
    */
    public function setSurvey(string $survey){
        $this->survey = $survey;
    }


    /*
    * string
    */
    public function setUser(string $user){
        $this->user = $user;
    }


    /*
    * string
    */
    public function setAnswerNumber(string $answer_number){
        $this->answer_number = $answer_number;
    }


    /*
    * string
    */
    public function setQuestionNumber(string $question_number){
        $this->question_number = $question_number;
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
    public function getSurvey(){
        return $this->survey;
    }

    /*
    * string
    */
    public function getUser(){
        return $this->user;
    }


    /*
    * string
    */
    public function getAnswerNumber(){
        return $this->answer_number;
    }

    /*
    * string
    */
    public function getQuestionNumber(){
        return $this->question_number;
    }
}