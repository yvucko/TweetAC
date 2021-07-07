<DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profil</title>
  </head>
  <body>
    <h1>Mon profil</h1><br>
    <div class="">
      <p>Nom de famille : <?= $_SESSION['lastname'] ?></p>
      <p>Votre prenom : <?= $_SESSION['firstname'] ?></p>
      <p>Votre age : <?= $_SESSION['age'] ?></p>
      <p>Votre genre : <?= $_SESSION['gender'] ?></p>
      <p>Votre ville : <?= $_SESSION['city'] ?></p>
      <p>Votre email du compte : <?= $_SESSION['email'] ?></p>
      <p>Votre hobbie : <?= $_SESSION['hobbie'] ?></p>
    </div>
    <div class="">
      <p><a href="index.php?action=modif">Modifier mon compte</a></p>
      <p><a href="index.php?action=disconect">Se deconecter</a></p>
    </div>
  </body>
</html>
