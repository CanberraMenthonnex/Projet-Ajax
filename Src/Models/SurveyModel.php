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