<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>

    <title>Profil</title>
</head>
<body>
  <form method="post" action="">
      <div class="container container-fluid">
        <h2>Modifier le profil</h2>
        <div class="col-8">
        <!--Pseudo-->
        <div class="form-group">
        <div class ="sr-only">
            <label for="pseudo">Pseudo :</label>
        </div>
        <div class="form-control">
            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" minlength="2" maxlength="30" value="">
        </div>
        </div>
        <!--Email-->
        <div class="form-group">
        <div class="sr-only">
            <label for="mail">E-mail :</label>
        </div>
        <div class="form-control">
            <input type="email" id="mail" name="mail" placeholder="E-mail" value="
            <?php if(isset($_POST['mail'])){ echo $_POST['mail']; } ?>" >
        </div>
        </div>
        <!--Date de naissance-->
        <div class="form-group">
        <div class="sr-only">
          <label for="date_of_birth">Date de naissance : </label>
        </div>
        <div class="form-control">
          <input type="date" id="date_of_birth" name="date_of_birth"  placeholder="Date de naissance" value=
          "<?php if(isset($_POST['dateofbirth'])){ echo $_POST['dateofbirth']; } ?>">
        </div>
        </div>
        <!--Mot de passe-->
        <div class="form-group">
        <div class="sr-only">
            <label for="password">Mot de passe :</label>
        </div>
        <div class="form-control">
            <input type="password" id="password" placeholder="Mot de passe" name="password">
        </div>
        </div>
        <!--Confirm password-->
        <div class="form-group">
        <div class="sr-only">
            <label for="confirm_password">Confirmation du mot de passe :</label>
        </div>
        <div class="form-control">
            <input type="password" id="confirm_password" placeholder="Confirmation" name="confirm_password">
        </div>
        </div>

        <div>
            <label for="confirm"></label>
            <input class ="button" type="submit" id="confirm" name="confirm" value="Confirmer">
        </div>
        </div>
        <div>
          <a href="index.php?action=profil"><input type="button" value="Retour au profil"></a>
        </div>
      </div>
  </form>
</body>
</html>
