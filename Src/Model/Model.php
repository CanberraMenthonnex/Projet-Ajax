<?php

namespace Model;

abstract class Model{
    private $_db;
    public function _construct(){
        require ROOT."/Configuration/configDb.php";
        $this->_db = new \PDO('mysql:host='. $this->host .
                              ';dbname=' . $this->dbname ,
                              $this->user, 
                              $this->pass, 
                              [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_WARNING]
                            );
    }
    

    public function insert(string $table, array $infos){
        $request = $this->_db->prepare("INSERT INTO $table (firstname, lastname, pseudo, password, email, status) VALUES (:firstname, :lastname, :pseudo, :password, :email, :status)");
        $request->bindValue(":firstname", $_POST['firstname']);
        $request->bindValue(":lastname", $_POST['lastname']);
        $request->bindValue(":pseudo", $_POST['pseudo']);
        $request->bindValue(":password", $_POST['password']);
        $request->bindValue(":email", $_POST['email']);
        $request->bindValue(":status", 1);
        $request->execute();
    }

    public function delete(string $table, string $champ, string $valeur) {

        $sql = "DELETE FROM " . $table . " WHERE " . $champ . " = " . $valeur ;

        $req = $this->_db->prepare($sql);

        $req->execute();

    }

    public function update(string $table, string $champ, string $valeur, string $ancienne_valeur){
        $sql= "UPDATE" . $table . "SET " . $champ ." = [" . $valeur . "] WHERE " . $champ . " = " . $ancienne_valeur;
        
        $req = $this->_db->prepare($sql);

        $req->execute();
    }



    public function getOne(string $table, string $pseudo) : Array{
        $request = $this->_db->query("SELECT * FROM $table WHERE pseudo =" . $pseudo);

        return $result = $request->fetch(\PDO::FETCH_ASSOC);
    }

    public function getAll(string $table, string $champ = null, string $entree = null): Array{
        $request = $this->_db->query("SELECT * FROM $table WHERE " . $champ . "=" . $entree);

        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }
}

 