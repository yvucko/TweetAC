<?php

function modif_profil(){

  var_dump($_SESSION['ID']);
 

    require 'model/modelModifProfil.php';
    require 'view/viewModifProfil.php';

    $user_id = $_SESSION['ID'];
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $dob = htmlspecialchars($_POST['date_of_birth']);
    $password = htmlspecialchars(sha1($_POST['password']));
    $confirmpassword = htmlspecialchars(sha1($_POST['confirm_password']));

    

  if(isset($_POST['confirm'])){
    if(isset($pseudo) && !empty($pseudo)){
      
      $modif = new AccountModif();
      
      $modifPseudo = $modif->modifData($pseudo, $user_id, 'pseudo');
      
      if($modifPseudo == true){

        echo "Votre pseudo a bien été changé !";
      }
      else
      {
        echo "Une erreur est survenue lors du changement de votre pseudo.";
      }
    }

    if(isset($mail) && !empty($mail)){
      $modif = new AccountModif();
      
      $verifMail = $modif->verifEmailUsed($mail);
      if ($verifMail == true) {
        echo "Email déjà existant";
        exit;
      }
      $modifMail = $modif->modifData($mail, $user_id, 'email');
      if($modifMail == true){
        echo "Votre adresse email a bien été modifiée !";
      }
      else
      {
        echo "Une erreur est survenue lors de la modification de votre adresse email.";
      }
    }

    

    if(isset($dob) && !empty($dob)){
      $modif = new AccountModif();
      $modifDob = $modif->modifData($dob, $user_id, 'dob');
      if($modifDob == true){
        echo "Votre date de naissance a bien été changée, pensez à vous reconnecter pour vous assurer que vos informations
        personnelles ont bien été modifiées.";
      }
      else
      {
        echo "Une erreur est survenue lors de la modification de la date de naissance.";
      }
    }

    if($password === $confirmpassword){
      if(isset($_POST['password']) && !empty($password)){
        $modif = new AccountModif();
        $modifPassword = $modif->modifData($password, $user_id, 'password');
        if($modifPassword == true){
          echo "Votre mot de passe a bien été changé.";
        }
        else
        {
          echo "Une erreur est survenue lors de la modification de votre mot de passe.";
        }
      }
    }
   
  }

    


}