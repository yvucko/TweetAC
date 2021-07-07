<?php
 require 'Manager.php';
/**
 * creat user and set in data basse
 */
 class UsersData extends Manager
 {
    private $_lastname;private $_firstname;private $_username;private $_pseudo;private $_dob;private $_email;private $_password;

    function __construct($lastname, $firstname, $username, $pseudo, $dob, $email, $password)
    {
      $this->_lastname = $lastname;
      $this->_firstname = $firstname;
      $this->_username = $username;
      $this->_pseudo = $pseudo;
      $this->_dob = $dob;
      $this->_email = $email;
      $this->_password = $password;
      $test = $this->verifUnique($this->get_pseudo(), 'pseudo');
      if ($test == true) {
        echo "Ce pseudo existe déjà.";
        exit;
      }
      $test = $this->verifUnique($this->get_email(), 'email');
      if ($test == true) {
        echo "Cette adresse email est déjà utilisée.";
        exit;
      }
    }
    private function get_lastname(){ return $this->_lastname; }
    private function get_firstname(){ return $this->_firstname; }
    private function get_username(){ return $this->_username; }
    private function get_pseudo(){ return $this->_pseudo; }
    private function get_dob(){ return $this->_dob; }
    private function get_email(){ return $this->_email; }
    private function get_password(){ return $this->_password; }

    public function newUser()
    {
      $db = $this->dbConnect();
      $req = $db->prepare("INSERT INTO user (lastname, firstname, username, pseudo, dob, email, password, avatar, bio, city, link, deleted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $req->execute(array(($this->get_lastname()),($this->get_firstname()),($this->get_username()),($this->get_pseudo()),($this->get_dob()),($this->get_email()),($this->get_password()), NULL, NULL, NULL, NULL, NULL));
      mysqli_close($db);
      $test = $this->dbConnect();
      $req_conection = $test->prepare("SELECT * FROM user WHERE email = ? AND password = ? ");
      $req_conection->execute(array($email, $password));
      $exist = $req_conection->rowcount();
      mysqli_close($test);
      if ($exist != 0) {
        return true;
      }
      else {
        return false;
      }
    }

    private function verifUnique($data , $string){
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT $string from user WHERE $string = ?");
    $req->execute(array($data));
    $exist = $req->rowcount();
    mysqli_close($db);
    if ($exist != 0) {
      return true;
    }
    else {
      return false;
    }
  }
}
