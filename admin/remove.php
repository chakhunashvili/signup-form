<?php

$id = $_POST['id'];

// pdo php mysql connection
  
  $serverame= "localhost:3306";
  $username="root";
  $password="1654545";

  // create connection
  try{
    $conn = new PDO("mysql:host=$servername;dbname=aleko",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $conn->exec("DELETE FROM users WHERE id={$id}");

  } catch(PDOException $e){
    echo "connection failed". $e->getMessage();
  } 