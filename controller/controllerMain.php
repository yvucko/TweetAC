<?php
#Permettre l’ajout de hashtags(#)•Permettre de cibler une personne que vous suivez dans un tweet '@'•Répondre à un tweet•Retweeter
function main()
{
  require_once('model/modelTweet.php');
  require_once('view/viewMain.php');
  if(isset($_POST['new'])){
    $text = htmlspecialchars($_POST['comment2']);
    if (!empty($text)){
      $tweet = new NewTweet();
      $result = $tweet->addTweet( $_SESSION['ID'], $text);
      if ($result[0] == 'false') {
        die('Impossible d\'ajouter le tweet !');
      }
      else {
        if ($result[1] > 0 && $result[0] == 'true'){ // for add # in bdd
          $tag = htmlspecialchars($_POST['tab2']);
          if (!empty($tag)){
            $pieces = explode(",", $tag);
            foreach ($pieces as $value) {
              $test = $tweet->addtag($value, $result[1]);
              if ($test == true) {
                // echo "# de -> $value  ajouter</br>";
              }
              else {
                // code...
              }
              // code...
            }
          }
        }
        if ($result[1] > 0 && $result[0] == 'true'){ // for add @ in bdd
          $tag1 = htmlspecialchars($_POST['tab1']);
          if (!empty($tag1)){
            $pieces1 = explode(",", $tag1);
            foreach ($pieces1 as $value1) {
              $value1 = substr($value1, 1);
              $test1 = $tweet->addper($value1, $result[1]);
              if ($test1 == true) {
                //  echo "@ de -> $value1 ajouter</br>";
              }
              else {
                // code...
              }
              // code...
            }
          }
        }
      }
    }
  }
}
