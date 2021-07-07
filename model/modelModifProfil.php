<?php

require 'Manager.php';

class AccountModif extends Manager{

  public function modifData($newData, $user_id, $string){

    $db = $this->dbConnect();
    $modifData = $db->prepare("UPDATE user SET $string = ? WHERE ID = ?");
    /*$modifData->bindValue(':newData', $newData, PDO::PARAM_STR);
    $modifData->bindValue(':ID', $user_id, PDO::PARAM_INT);*/
    $modifData->execute(array(
      $newData,
      $user_id
    ));
    $_SESSION[$string] = $newData;

    $modifData = $db->prepare("SELECT * FROM user WHERE $string = ? AND ID = ?");
    $modifData->execute(array(
      $newData,
      $user_id
    ));
    $test = $modifData->fetch();
  
    
    if($test[$string] == $newData){
      return true;
    } else{
      return false;
    }


    /*if(isset($dob)){
      $newAge = $db->prepare("SELECT (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW()) - TO_DAYS(`dob`)), '%Y')+0)
      AS 'age' FROM user WHERE ID = ?");
      $newAge->execute(array($id_user));
      $userage = $newAge->fetch();
    }*/
  }
  public function verifEmailUsed($mail){
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT email from user WHERE email=?");
    $req->execute(array($mail));
    $exist = $req->rowcount();
    if ($exist == 1) {
      return true;
    }
    else {
      return false;
    }
  }

}