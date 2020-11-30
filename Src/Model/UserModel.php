<?php

class UserModel{

  private string $id;
  private string $firstname;
  private string $lastname;
  private string $pseudo;
  private string $password;
  private string $email;
  private bool $status;

  /*
  * string
  */
  public function setId(string $id){
    $this->id = $id;
  }


  /*
  * string
  */
  public function setfirstname(string $firstname){
    $this->firstname = $firstname;
  }
  public function setLastname(string $lastname){
    $this->lastname = $lastname;
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
  public function setPassword(string $password){
    $this->password = $password;
  }


  /*
  * string
  */
  public function setEmail(string $email){
    $this->email = $email;
  }



  /*
  * bool
  */
  //Utile?
  public function setStatus(bool $status){
    $this->status = $status;
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
  public function getFirstname(){
    return $this->firstname;
  }


  /*
  * string
  */
  public function getLastname(){
    return $this->lastname;
  }


  /*
  * string
  */
  public function getPseudo(){
    return $this->pseudo;
  }


  /*
  * string
  */
  public function getPassword(){
    return $this->password;
  }


  /*
  * string
  */
  public function getEmail(){
    return $this->email;
  }


  /*
  * string
  */




  /*
  * string
  */
  //Utile ?
  public function getStatus(){
    return $this->status;
  }


}
