<?php
// pdo php mysql connection
  
  $serverame= "localhost:3306";
  $username="root";
  $password="1654545";

  // create connection
  try{
    $conn = new PDO("mysql:host=$servername;dbname=aleko",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $data = $conn->query("SELECT * FROM users")->fetchAll();

    echo json_encode($data);

  } catch(PDOException $e){
    echo "connection failed". $e->getMessage();
  } 