<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="public/css/connexion.css" type="text/css"/>
    <title>Connexion</title>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="Logo">
          <img src="public/img/logo.png">
        </div>
        <p class="Connexion-sentence">Se connecter à <br>Tweet académie</p>
        <div class="Form-container">
          <form action="" method="POST">
            <div class="First-input">
              <!-- <label><b>Nom d'utilisateur</b></label> -->
              <input type="text" placeholder="Téléphone, email ou nom d'utilisateur" name="username" required>
            </div>
            <div class="Second-input">
              <!-- <label><b>Mot de passe</b></label> -->
              <input type="password" placeholder="Mot de passe" name="password" required>
            </div>
            <input type="submit" id='submit' name='submit' value='Se connecter' >
            </form>
            <div class="container-link">
              <div class="link-1">
                <a href="index.php">Retourner à l'accueil</a>
              </div>
              <p class="Point">.</p>
              <div class="link-2">
                <a href="index.php?action=subscribe">S'inscrire sur Tweet académie</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
