<?php
require('Manager.php');

/**
 * try connection with email or username or phone and password
 */
class tryconect extends Manager
{
  private $_type;
  private $_password;
  function __construct($typeofconnexion, $pwd)
  {
    $this->_type = $typeofconnexion;
    $this->_password = $pwd;
  }
  public function tryConnection($value){
    $db = $this->dbConnect();
    $req_conection = $db->prepare("SELECT * FROM user WHERE $value = ? AND password = ? ");
    $req_conection->execute(array($this->_type, $this->_password));
    $exist = $req_conection->rowcount();

    if ($exist == 1) {
      return true;
    }
    else {
      return false;
    }
  }

  public function openSession($value){
    $id_user = $_SESSION['ID'];
    $db = $this->dbConnect();
    $req_conection = $db->prepare("SELECT * FROM user WHERE $value = ? AND password = ? ");
    $req_conection->execute(array($this->_type, $this->_password));
    $userinfo = $req_conection->fetch();

    $req_age = $db->prepare("SELECT (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW()) - TO_DAYS(`dob`)), '%Y')+0)
    AS 'age' FROM user WHERE ID = ?");
    $req_age->execute(array($id_user));
    $userage = $req_age->fetch();

    $_SESSION['ID'] = $userinfo['ID'];
    $_SESSION['lastname'] = $userinfo['lastname'];
    $_SESSION['firstname'] = $userinfo['firstname'];
    $_SESSION['username'] = $userinfo['username'];
    $_SESSION['pseudo'] = $userinfo['pseudo'];
    $_SESSION['dob'] = $userinfo['dob'];
    $_SESSION['email'] = $userinfo['email'];
    $_SESSION['password'] = $userinfo['password'];
    $_SESSION['avatar'] = $userinfo['avatar'];
    $_SESSION['age'] = $userage['age'];
    if (isset($_SESSION)) {
      return $_SESSION;
    }
    else {
      return false;
    }
  }
}
