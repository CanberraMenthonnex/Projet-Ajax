<?php

namespace Src\Models;

class SurveyModel extends Model{

    public function __construct()
        {
            parent::__construct();
        }


    public function getMessage(){

        $query = $this->_db->query("SELECT * FROM chat");
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function postMessage($data){
        $prepare = $this->_db->prepare("INSERT INTO chat (content) VALUES (:content)");
        $prepare->execute($data);
        echo json_encode("");
    }
}