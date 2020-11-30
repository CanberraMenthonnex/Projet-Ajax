<?php

namespace Src\Models;

class Model{
    protected $_db;

    public function __construct(){
        
        $this->_db = new \PDO('mysql:host=localhost;dbname=data_base', "root", "root", array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_WARNING,\PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_OBJ));
        
    }


    public function insert(string $table, array $infos){
        $request = $this->_db->prepare("INSERT INTO $table (firstname, lastname, pseudo, password, email, status) VALUES (:firstname, :lastname, :pseudo, :password, :email, :status)");
        $request->bindValue(":firstname", $infos['firstname']);
        $request->bindValue(":lastname", $infos['lastname']);
        $request->bindValue(":pseudo", $infos['pseudo']);
        $request->bindValue(":password", $infos['password']);
        $request->bindValue(":email", $infos['email']);
        $request->bindValue(":status", 0);
        $request->execute();
    }


    public function getOne(string $table, string $champs, string $infos){
        $request = $this->_db->query("SELECT * FROM $table WHERE $champs =" . "'$infos'");
        $result = $request->fetch(\PDO::FETCH_ASSOC);

        
        return $result;
    }

    public function getAll(string $table, string $champ = null, string $entree = null): Array{
        $request = $this->_db->query("SELECT * FROM $table WHERE $champ=" . "'$entree'");

        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update(string $table, string $champs, string $value){
       $this->_db->query("UPDATE $table SET $champs=" . "'$value'");
    }
}