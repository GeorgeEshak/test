<?php
function CreateDB($dbname){
  $host="localhost";
  $root="root";
  $root_password="";
  try {
       $dbh = new PDO("mysql:host=$host", $root, $root_password);
       $dbh->exec("CREATE DATABASE IF NOT EXISTS $dbname;")
            or die(print_r($dbh->errorInfo(), true));
    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }
   }
CreateDB("quizDB");
include_once('database.php');
$r = $db->Execute(file_get_contents('data.sql'));
if($r !== false)
  echo  "Data are added successfully!<br/>";
  else
 echo  "Error.<br/>";
 ?>

