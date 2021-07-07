<?php
session_start();
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'subscribe') { // page d'inscription
      require_once('controller/controllerSubscribe.php');
      subscribe();
  }
  if ($_GET['action'] == 'connection') { // page d'accueil avec le menu, les tweets etc
      require_once('controller/controllerConnection.php');
      connection();
  }
  if ($_GET['action'] == 'deconnection'){
      session_abort();
      session_destroy();

      header('Location: index.php');

  }
  if ($_GET['action'] == 'explore') { //  // TODO: ! 1er page d'accueil quand pas connecter et page d'exploration quand connected
      require_once('controller/controllerExplore.php');
      explore();
  }
  if ($_GET['action'] == 'notif') { // page d'arlet et de notification
      require_once('controller/controllerNotif.php');
      notif();
  }
  if ($_GET['action'] == 'chat') { // page de mesagerie
      require_once('controller/controllerChat.php');
      chat();
  }
  if ($_GET['action'] == 'bookmark') { //  page de signet ?
      require_once('controller/controllerBookmark.php');
      bookmark();
  }
  if ($_GET['action'] == 'list') { // page des liste/groupe de tweet sauvegarder
      require_once('controller/controllerList.php');
      //list();
  }
  if ($_GET['action'] == 'profil') { // page de vue du profil avec l'image tout ca
      require_once('controller/controllerProfil.php');
      profil();
  }
  if ($_GET['action'] == 'modif') { //page de modification du profil
      require_once('controller/controllerModifProfil.php');
      modif_profil();
  }
  if ($_GET['action'] == 'main') { //page de modification du profil
    require_once('controller/controllerMain.php');
    main();
  }
  if ($_GET['action'] == 'sendmessage') {
    require_once('controller/controllerSendMessage.php');
    sendMessage();
  }
  if ($_GET['action'] == 'test'){
    require_once('controller/controlerTweet.php');
    addCommentTweet();
  }
}
else {
  require_once('controller/controllerHome.php');
  home();
}
