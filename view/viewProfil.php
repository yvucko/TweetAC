<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="public/css/profil.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Profil</title>
  </head>
  <body>

    <nav>
    <ul>
      <li><a href="index.php?action=main"><i class="fas fa-home">&nbsp;&nbsp;&nbsp;&nbsp;</i>Accueil</a></li>
      <li><a href="index.php?action=explore"><i class="fas fa-hashtag">&nbsp;&nbsp;&nbsp;&nbsp;</i>Explorer</a></li>
      <li><a href="index.php?action=notif"><i class="far fa-bell">&nbsp;&nbsp;&nbsp;&nbsp;</i>Notifications</a></li>
      <li><a href="index.php?action=sendmessage"><i class="far fa-envelope">&nbsp;&nbsp;&nbsp;</i>Messages</a></li>
      <li><a href="index.php?action=deconnection"><i class="fas fa-sign-out-alt"></i></a></li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">
  <div class="col-4">
    <p class="title">Profil</p>
    <div class="profile">
      <div class="profile-container">
        <div class="profile-img">
          <img src="public/img/profile.jpg" alt="no picture">
        </div>
        <div class="container-names">
          <div class="name-profile"><?php echo $_SESSION['firstname'];?></div>
          <div class="surname-profile"><?php echo $_SESSION['lastname'];?></div>
          <div class="username-profile"><?php echo $_SESSION['username'];?></div>
        </div>
      </div>
      <div class="middle-profile">
      <div class="pseudo-profile"><?php echo $_SESSION['pseudo'];?>
      </div>
      <div class="date-naissance"><?php echo $_SESSION['dob'];?>
      -</div>
      <div class="age"><?php echo $_SESSION['age'];?> ans</div>
      <div class="all-followers-contain">
        <div class="follow-contain">
          <div class="follow"><a href="#">abonnements</a></div>
        </div>
        <div class="followers-contain">
          <div class="followers"> <a href="#">abonnés</a></div>
        </div>
      </div>
      </div>

      <div class="bottom-profile">
        <div class="btn-modify"><a href="index.php?action=modif">Modifier</a></div>
      </div>

    </div>
  </div>

  <div class="col-8">
  <div class="tweet">
   <div class="names">
     <a href="#"><div class="pseudo">Marie</div></a>
     <a href="#"><div class="username">@MarieMmm</div></a>
   </div>

   <p class="text-contain">Hey everyone !</p>

   <div class="link-tweet">
   <div class="comment">
     <i class="far fa-comment"></i></div>
     <div class="retweet">
       <i class="fas fa-retweet"></i></div>
     <div class="like">
       <i class="far fa-heart"></i></div>
     <div class="share">
       <i class="far fa-share-square"></i></div>
     </div>
  </div>

  <div class="tweet">
   <div class="names">
     <a href="#"><div class="pseudo">Marie</div></a>
     <a href="#"><div class="username">@MarieMmm</div></a>
   </div>

   <p class="text-contain">Hey everyone !</p>

   <div class="link-tweet">
   <div class="comment">
     <i class="far fa-comment"></i></div>
     <div class="retweet">
       <i class="fas fa-retweet"></i></div>
     <div class="like">
       <i class="far fa-heart"></i></div>
     <div class="share">
       <i class="far fa-share-square"></i></div>
     </div>
  </div>

  <div class="tweet">
   <div class="names">
     <a href="#"><div class="pseudo">Marie</div></a>
     <a href="#"><div class="username">@MarieMmm</div></a>
   </div>

   <p class="text-contain">Hey everyone !</p>

   <div class="link-tweet">
   <div class="comment">
     <i class="far fa-comment"></i></div>
     <div class="retweet">
       <i class="fas fa-retweet"></i></div>
     <div class="like">
       <i class="far fa-heart"></i></div>
     <div class="share">
       <i class="far fa-share-square"></i></div>
     </div>
  </div>

  <div class="tweet">
   <div class="names">
     <a href="#"><div class="pseudo">Marie</div></a>
     <a href="#"><div class="username">@MarieMmm</div></a>
   </div>

   <p class="text-contain">Hey everyone !</p>

   <div class="link-tweet">
   <div class="comment">
     <i class="far fa-comment"></i></div>
     <div class="retweet">
       <i class="fas fa-retweet"></i></div>
     <div class="like">
       <i class="far fa-heart"></i></div>
     <div class="share">
       <i class="far fa-share-square"></i></div>
     </div>
  </div>

  <div class="tweet">
   <div class="names">
     <a href="#"><div class="pseudo">Marie</div></a>
     <a href="#"><div class="username">@MarieMmm</div></a>
   </div>

   <p class="text-contain">Hey everyone !</p>

   <div class="link-tweet">
   <div class="comment">
     <i class="far fa-comment"></i></div>
     <div class="retweet">
       <i class="fas fa-retweet"></i></div>
     <div class="like">
       <i class="far fa-heart"></i></div>
     <div class="share">
       <i class="far fa-share-square"></i></div>
     </div>
  </div>


  </div>

  </div>
  </div>

  </body>
</html>
