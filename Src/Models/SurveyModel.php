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


    // public function postMessage($data){
    //     $prepare = $this->_db->prepare("INSERT INTO chat (content) VALUES (:content)");
    //     $prepare->execute($data);
    //     echo json_encode("");
    // }

    public function sendSurvey($data){
        $mail = $_SESSION["email"];
        $_db = new \PDO("mysql:host=localhost;dbname=data_base", "root", "root");
        $prepare = $_db->prepare("INSERT INTO survey (user,question,answer_1,answer_2,answer_3,answer_4) VALUES (:user,:question,:asw1,:asw2,:asw3,:asw4)");
        $prepare->execute(array(
            "user" => $mail,
            'question' => $data["question"],
            "asw1" => $data["asw1"],
            "asw2" => $data["asw2"],
            "asw3" => $data["asw3"],
            "asw4" => $data["asw4"]
        ));
        
    }

    public function prepareSendingMail(){
        $infos = $this->getAll('user', $_SESSION["email"]);
        foreach ($infos as $friend){
            $this->sendMail($friend);
        }
    }
    public function sendMail($user){
        $to      = $user;
        $subject = 'Nouveau sondage de ' . $_SESSION["firstname"] ;
        $message = 'Un nouveau sondage à été par ' . $_SESSION["firstname"] . ' Depêcher d\'y répondre -> http://localhost/Public/';
        $headers = array(
            'From' => 'dorardarmand@gmail.com',
            'Reply-To' => 'armandorard@live.fr',
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($to, $subject, $message, $headers);
    }
}