<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $options = [];

    //Start of establishing databse connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=borderlessDB", $username, $password, $options);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage(); //uncomment this once connection failure test is established
    }
    //End of establishing databse connection
?>