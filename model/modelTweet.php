<?php
require 'Manager.php';
/**
* for add new tweet
*/
class NewTweet extends Manager
{
  public function addTweet($id, $text)// for add new tweet return array with the id and true if its working propely
  {

    $tab = [];
    $tab_returned = [];
    $db = $this->dbConnect();
    $index = 0;
    $req_conection = $db->prepare("INSERT INTO `tweet` ( `ID_user`, `text`, `date`) VALUES ( ?, ?, NOW())");
    $req_conection->execute(array($id, $text ));
    $test = $this->dbConnect();
    $req_conection = $test->prepare("SELECT * FROM tweet WHERE `ID_user` = ? AND `text` = ? ");
    $req_conection->execute(array($id, $text));
    $exist = $req_conection->rowcount();
    if ($exist != 0) {
      $req_conection = $test->prepare("SELECT * FROM tweet WHERE `ID_user` = ? AND `text` = ? ");
      $req_conection->execute(array($id, $text));
      while ($u = $req_conection->fetch()) {
        $tab[$index++] =  $u['ID'];
      }
      $tab_returned[0] = 'true';
      $tab_returned[1] = max($tab);
      return $tab_returned;
    }
    else {
      $tab_returned[0] = 'false';
      return $tab_returned;
    }
  }
  public function addtag($string, $id) // for add # of last tweet in bdd
  {
    $db = $this->dbConnect();
    $req_conection = $db->prepare("INSERT INTO `hashtag` ( `hashtag`, `ID_tweet`) VALUES ( ?, ?)");
    $req_conection->execute(array($string, $id));
    $test = $this->dbConnect();
    $req_conection = $test->prepare("SELECT * FROM `hashtag` WHERE `hashtag` = ? AND `ID_tweet` = ? ");
    $req_conection->execute(array($string, $id));
    $exist = $req_conection->rowcount();
    if ($exist != 0) {
      return true;
    }
    else {
      return false;
    }
  }
  public function addper($string, $id) // for add @ of last tweet in bdd
  {
    $id_mention = '';
    $db = $this->dbConnect();
    $req_conection = $db->prepare("SELECT * FROM `user` WHERE `pseudo` = ?");
    $req_conection->execute(array($string));
    $u = $req_conection->fetch();
    $id_mention = $u[0];
    if (!empty($id_mention)){
      $db = $this->dbConnect();
      $req_conection = $db->prepare("INSERT INTO `identification` ( `ID_user`, `ID_tweet`) VALUES ( ?, ?)");
      $req_conection->execute(array($id_mention, $id));
      return true;
    }
    else {
      return false;
    }
  }
}

class DisplayTweet extends Manager
{
  protected $_id;
  protected $_limite;

  function __construct($id_seesion, $stop = 20){
    $this->_id = $id_seesion;
    $this->_limite = $stop;
  }
  public function dysplay()// for display twwet personel
  {
    $db = $this->dbConnect();
    $index = 0;
    $bigtab = [];
    $tab = [];
    $req_conection = $db->prepare("SELECT * FROM `tweet` WHERE `ID_user` = ? ORDER BY `date` ASC ");
    $req_conection->execute(array(  $this->_id));
    while ( $u = $req_conection->fetch()) {
      if ($index >= $this->_limite) {
        return $bigtab;
      }
      $tab[0] = $u[1];
      $tab[1] = $u[2];
      $tab[2] = $u[3];
      $bigtab[$index] = $tab;
      $index++;
    }
    return $bigtab;
  }
}
