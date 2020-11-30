<?php

namespace Src\Models;

class Model{
    protected $_db;

    public function __construct(){
        require ROOT."/Configuration/configDb.php";
        $this->_db = new \PDO('mysql:host=localhost;dbname=database', "root", "root", array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_WARNING,\PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_OBJ));
        
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


    public function getOne(string $table, string $champs, string $infos){
        $request = $this->_db->query("SELECT * FROM $table WHERE $champs =" . "'$infos'"); // ???s
        $result = $request->fetch(\PDO::FETCH_ASSOC);

        
        return $result;
    }

    public function getAll(string $table, string $champ = null, string $entree = null): Array{
        $request = $this->_db->query("SELECT * FROM $table WHERE $champ=" . $entree);

        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getFriend(string $userID): Array{
        $request = $this->_db->query("SELECT user_id2 FROM friends INNER JOIN user ON friends.id = user.user_id WHERE user_id2 =" . $userID);
        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }
}