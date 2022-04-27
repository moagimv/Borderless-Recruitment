<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Start of creating a new databse (only if there is no existing Databse)
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE borderlessDB";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>"; //uncomment this once databse creation success is established
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); //uncomment this once databse creation failure is established
    }
      
    $conn = null;
    //End of creating a new databse

    //Start of establishing databse connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=borderlessDB", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; //uncomment this once connection success is established
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage(); //uncomment this once connection failure test is established
    }
    //End of establishing databse connection


?>