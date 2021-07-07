<?php
function subscribe()
{
  require_once('model/modelSubscribe.php'); // j'ai les donne voulue
  require_once('view/viewSubscribe.php'); // j'affiche les trucs
  if(isset($_POST['confirm'])){
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $username = htmlspecialchars($_POST['username']); //// TODO: input a enlever dans le view
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $dob = htmlspecialchars($_POST['dateofbirth']);
    $email = htmlspecialchars($_POST['mail']);
    $email2 = htmlspecialchars($_POST['mail2']); //// TODO: input a rajouter dans le view
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']); //// TODO: input a rajouter dans le view

    if ((!empty($lastname)) && (!empty($firstname)) &&  (!empty($pseudo)) && (!empty($dob)) && (!empty($email)) && (!empty($password))) {
      $lastname = verifSpecialCharacter($lastname);
      $firstname = verifSpecialCharacter($firstname);
      $pseudo = verifSpecialCharacter($pseudo);
      $lastname = verifRemoveWhitespace($lastname);
      $firstname = verifRemoveWhitespace($firstname);
      $pseudo = verifRemoveWhitespace($pseudo);
      $email = verifRemoveWhitespace($email);
      $email2 = verifRemoveWhitespace($email2);
      $username = $lastname . ' ' . $firstname;
      if (($lastname != false) && ($firstname != false) &&  ($pseudo != false)) {
      if ($email != $email2) {
          echo "Les adresses mail ne correspondent pas.";
          exit;
        }
      if ($password != $password2) {
          echo "Les mots de passe ne correspondent pas.";
          exit;
        }
        $username = $lastname .' '. $firstname;
        $register = new UsersData($lastname, $firstname, $username, $pseudo, $dob, $email, $password);
        $test = $register->newUser();
        if ($test == true) {
          echo "Votre compte a bien été créé !";
        }
        else {
         /* echo "Votre compte n'a pas été créé !";*/
        }
      }
      else {
        echo "Seul le mot de passe peut contenir des charactères spéciaux.";
      }
    }
  }
}

function verifRemoveWhitespace($string){
  if ($string === false) {
    return false;
  }
  $string = preg_replace('/\s+/', ' ', $string);
  $string = trim(preg_replace('/\s+/', ' ', $string));
  return $string;
}

function verifSpecialCharacter($string){
  if ($string === false) {
    return false;
  }
  if (!preg_match('/[\'^£$%&*()}{@#~?><>\/,|=_+¬-]/', $string)) {
    return $string;
  }
  else {
    return false;
  }
}
