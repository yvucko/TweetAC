<?php

function sendMessage(){

    require_once('model/modelSendMessage.php'); 
    require_once('view/viewSendMessage.php');


    if(isset($_POST['message'])){
       $send = new sendMessage();
       $send->sendPrivateMail();
    }
        /*if(isset($_POST['send_message'])) {
          $id_user = $_SESSION['ID'];
          $destinataire = $_POST['destinataire'];
          $message = $_POST['message'];
          
          

          var_dump($id_adressee);
          var_dump($id_user);

          $send = new sendMessage($id_adressee, $message, $id_user);
          $test = $send->sendPrivateMail();

          

      }*/
   

    /*if(isset($_SESSION['ID']) AND !empty($_SESSION['ID'])) {
        if(isset($_POST['send_message'])) {
           if(isset($_POST['destinataire'],$_POST['message']) AND !empty($_POST['destinataire']) AND !empty($_POST['message'])) {
              $destinataire = htmlspecialchars($_POST['destinataire']);
              $message = htmlspecialchars($_POST['message']);
              $id_destinataire = $db->prepare('SELECT ID FROM user WHERE pseudo = ?');
              $id_destinataire->execute(array($destinataire));
              $dest_exist = $id_destinataire->rowCount();
              if($dest_exist == 1) {
                 $id_destinataire = $id_destinataire->fetch();
                 $id_destinataire = $id_destinataire['ID'];
                 $ins = $db->prepare('INSERT INTO message(adressee_id, text, ID_user) VALUES (?,?,?)');
                 $ins->execute(array($_SESSION['ID'],$id_destinataire,$message));
                 $error = "Votre message a bien été envoyé !";
              } else {
                 $error = "Cet utilisateur n'existe pas...";
              }
           } else {
              $error = "Veuillez compléter tous les champs";
           }
        }
        $destinataires = $db->query('SELECT pseudo FROM user ORDER BY pseudo');
    
} */



}