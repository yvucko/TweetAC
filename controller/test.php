<?php 



$db = new \PDO('mysql:host=localhost;dbname=common-database;charset=utf8', 'root', 'A123456789a');
$message = $_POST['message'];
$destinataire = $_POST['destinataire'];
/*$sql = "SELECT * FROM user WHERE pseudo = '$message'";*/
$sql = "INSERT INTO `message`(adressee_id, text, ID_user) VALUES (1, $message, 10)";
$query=$db->prepare($sql);
$query->execute();

echo json_encode($query->fetchAll());

/*echo $sql;*/
