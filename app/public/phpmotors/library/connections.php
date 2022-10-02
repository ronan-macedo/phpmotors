<?php
function phpmotorsConnect(){
 $server = 'mysql';
 $dbname= 'phpmotors';
 $username = 'iClient';
 $password = 'P@55w0rd'; 
 $dsn = "mysql:host=$server;dbname=$dbname";
 $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

 // Create the actual connection object and assign it to a variable
 try {   
  return new PDO($dsn, $username, $password, $options);
 } catch(PDOException $e) {
  header('Location: /phpmotors/view/500.php');
  exit;
 }
}

phpmotorsConnect();
