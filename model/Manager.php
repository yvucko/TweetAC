<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=common-database;charset=utf8', 'root', 'A123456789a');
      //  $test = $db->query("SELECT * FROM users WHERE 1");
      //  while ($data = $test->fetch()) {
      //    print_r($data) ;
    //}
        return $db;
    }
}
