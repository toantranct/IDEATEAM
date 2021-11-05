<?php
    $serverName = "DESKTOP-ASIQ3PU"; 
    $user = "sa";   
    $password = "123456";  
    $databaseName = "db_RAPCHIEUPHIM_BTL";  

    try {
      $conn = new PDO("sqlsrv:server=$serverName;Database=$databaseName", $user, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
 
?>