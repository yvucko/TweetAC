<?php

require 'Manager.php';


  
/*class UserProfil extends Manager{
  public function userProfil(){
    
    $user = $_SESSION['ID_user'];

    $test = $this->dbConnect();
    $req_profil = $test->prepare("SELECT * FROM user WHERE ID_user ='$user'");
    $req_profil->execute(array($user));
    $exist = $req_profil->rowcount();
    $userage = $db->query("SELECT (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW()) - TO_DAYS(`dateofbirth`)), '%Y')+0)
     AS '$age' FROM user WHERE ID_user ='$user'");



    if ($exist != 0) {
      return true;
    }
    else {
      return false;
    }
}
  }*/

    
