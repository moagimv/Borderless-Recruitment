<?php
    //Start of creating a table (statement is executed once if the are no tables created)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "borderlessDB";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "CREATE TABLE User (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Uname VARCHAR(50) NOT NULL,
            UPassword VARCHAR(50) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table User created successfully"; //uncomment this once table generation success is established
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); //uncomment this once table generation failure is established
    }

    $conn = null;
    //End of creating a table (statement is executed once if the are no tables created)

    //Start of inserting default user 
    // Create connection (statement is executed once, when the table is created)
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO User (Uname, UPassword)
    VALUES ('bordUser', '@BordPass2134')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully"; //uncomment this once test is complete
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; //uncomment this once test is complete
    }

    $conn->close();
    //End of inserting default user (statement is executed once, when the table is created)


    
?>