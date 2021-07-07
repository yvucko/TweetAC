<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/subscribe.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profil</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="block1" class="col-md-6">
        <!-- form class="form-inline"    -->
        <form method="post">

                              <div class="form-group">
                                  <label for="lastname" class="sr-only">Nom :</label>
                                  <input type="text" class="form-control " placeholder="Nom" id="lastname" name="lastname" minlength="2" maxlength="30" size="10" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname']; } ?>">

                              </div>
                              <div class="form-group">
                                  <label for="firstname" class="sr-only">Prénom :</label>
                                  <input type="text" class="form-control" placeholder="Prénom" id="firstname" name="firstname" minlength="2" maxlength="30" size="10" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; } ?>">
                              </div>
                              <div class="form-group">
                                  <label for="pseudo" class="sr-only">Pseudo :</label>
                                  <input type="text" class="form-control" placeholder="Pseudo" id="pseudo" name="pseudo" minlength="2" maxlength="30" size="10" value="<?php if(isset($_POST['pseudo'])){ echo $_POST['pseudo']; } ?>">
                              </div>
                              <div class="form-group">
                                  <label for="username"class="sr-only">Username :</label>
                                  <input type="text" class="form-control" placeholder="Username" id="username" name="username" minlength="2" maxlength="30" size="10" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>">
                              </div>
                              <div class="form-group">
                                  <label for="dateofbirth" class="sr-only">Date de naissance :</label>
                                  <input type="date" class="form-control" placeholder="Date de naissance" id="dateofbirth" name="dateofbirth" value="<?php if(isset($_POST['dateofbirth'])){ echo $_POST['dateofbirth']; } ?>">
                              </div>

                              <div class="form-group">
                                  <label for="mail" class="sr-only">E-mail :</label>
                                  <input type="email" class="form-control" placeholder="Adresse mail" id="mail" size="10" name="mail"  value="<?php if(isset($_POST['mail'])){ echo $_POST['mail']; } ?>" >
                              </div>
                              <div class="form-group">
                                  <label for="mail" class="sr-only">Confirmation de l'e-mail :</label>
                                  <input type="email" class="form-control" placeholder="Confirmation de l'email" id="mail2" size="10" name="mail2"  value="
                                  <?php if(isset($_POST['mail'])){ echo $_POST['mail']; } ?>" >
                              </div>
                              <div class="form-group">
                                  <label for="password" class="sr-only">Mot de passe :</label>
                                  <input type="password"class="form-control" placeholder="Mot de passe" id="password" size="10" name="password">
                              </div>
                              <div class="form-group">
                                  <label for="confirm_password" class="sr-only">Confirmation du mot de passe :</label>
                                  <input type="password" class="form-control" placeholder="Confirmation du mot de passe" id="password2" size="10" name="password2">
                              </div>
                              <div class="form-group">
                                  <label for="confirm" class="sr-only"></label>
                                  <input class="btn btn-success btn-lg" type="submit" id="confirm" name="confirm" value="S'inscrire">
                              </div>

                            <div>
                                <a href="index.php" type="button" class="btn btn-info">Retour à l'accueil</button></a>
                              </div>
                          </form>

                </div>
        <div id ="block2" class="col-md-6" >
            <img src="public/img/logo.png" class="img-fluid" alt= "Responsive image" >
        </div>
    </div>
</div>


</div>
</body>



</html>
