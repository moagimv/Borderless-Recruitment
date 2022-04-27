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
        $sql = "CREATE TABLE Course (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            courseName VARCHAR(50) NOT NULL,
            courseLevel VARCHAR(50) NOT NULL,
            nqfLevel VARCHAR(30) NOT NULL,
            universty VARCHAR(100) NOT NULL,
            contactPhone VARCHAR(30) NOT NULL,
            contactEmail VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table Course created successfully"; //uncomment this once table generation success is established
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); //uncomment this once table generation failure is established
    }

    $conn = null;
    //End of creating a table (statement is executed once if the are no tables created)

    
?>