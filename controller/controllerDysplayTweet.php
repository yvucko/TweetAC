<?php
$id  =  $_POST['id'];
$db = new \PDO('mysql:host=localhost;dbname=common-database;charset=utf8', 'root', 'A123456789a');
$index = 1;
$bigtab[0] = array($_POST['name']);
$tab = [];
$req_conection = $db->prepare("SELECT * FROM `tweet` WHERE `ID_user` = ? ORDER BY `date` ASC ");
$req_conection->execute(array($id));
while ( $u = $req_conection->fetch()) {
  if ($index >= 20) {
    return $bigtab;
  }
  $tab[0] = $u[1];
  $tab[1] = $u[2];
  $tab[2] = $u[3];
  $bigtab[$index] = $tab;
  $index++;
}
echo json_encode($bigtab);
