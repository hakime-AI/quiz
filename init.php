<?php
session_start();
$pageActuel=htmlspecialchars($_SERVER['PHP_SELF']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SiteQuiz";
try{
    $codb = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,[
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

    
}
catch(PDOException $e)
{
  echo "Message d'erreur : " .$e->getMessage(). "<br />";
}
?>