<?php

require "Manager.php";

class sendMessage extends Manager {

public function sendPrivateMail(){
    $db = $this->dbConnect();

    $sql = "SELECT * FROM user";
    $query=$db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    /*$id_adressee = "SELECT ID FROM user WHERE pseudo = ?";
    $id_adressee->execute(array($destinataire));
    $id_adressee = $id_adressee->fetch();
    $id_adressee = $id_adressee['ID'];

    $sendmessage = "INSERT INTO message(adressee_id, text, ID_user) VALUES (?, ?, ?)";
    $sendmessage->execute(array($id_adressee, $message, $id_user));*/

    
    
}


    


}


    

?>