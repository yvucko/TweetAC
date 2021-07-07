<?php

function checkEmail($email) {
  $find1 = strpos($email, '@');
  $find2 = strpos($email, '.');
  return ($find1 !== false && $find2 !== false && $find2 > $find1);
}

function connection()
{
    require_once('model/modelConnection.php');
    require_once('view/viewConnection.php');
    if (isset($_POST['submit'])) {
    $typeofconnexion = htmlspecialchars( $_POST['username']);
    $password_co = sha1( $_POST['password']);
    if (checkEmail($typeofconnexion) ){
      $value  = 'email';
    }
    else if (is_numeric($typeofconnexion)) { //pas de co par phone
      $value  = 'phone';
    }
    else {
      $value  = 'username';
    }
    if (!empty($typeofconnexion) && !empty($password_co) && !empty($value) ) {
      $try = new tryconect($typeofconnexion, $password_co);
      $exist = $try->tryConnection($value);
      if ($exist === true) {
        $_SESSION = $try->openSession($value);
        if ($_SESSION == true) {
          /*print_r($_SESSION); echo "</br>";
          echo "c ok on go another place !";*/
          header("location:index.php?action=profil"); //// TODO: a remmetre bien apres test
        }
        else {
          echo "Erreur de connexion";
        }
      }
      else {
        echo "Impossible de se connecter, identifiant incorrect...";
      }
    }
  }
}
