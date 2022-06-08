

//Start of creating a table (statement is executed once if the are no tables created)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "borderlessDB";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create Student table
        $sql = "CREATE TABLE Student (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(50) NOT NULL,
            lastname VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            originCountry VARCHAR(50),
            studyUniversity VARCHAR(50) NOT NULL,
            studyCourse VARCHAR(50) NOT NULL,
            copyOfID VARCHAR(50),
            copyOfPassport VARCHAR(50),
            copyOfResults VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table Student created successfully"; //uncomment this once table generation success is established

        // sql to create jobSeeker table
        $sql = "CREATE TABLE jobSeeker (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(50) NOT NULL,
            lastname VARCHAR(50) NOT NULL,
            email VARCHAR(30) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            originCountry VARCHAR(50),
            position VARCHAR(50) NOT NULL,
            copyOfID VARCHAR(50),
            copyOfCV VARCHAR(50),
            copyOfResults VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table jobSeeker created successfully"; //uncomment this once table generation success is established

        // sql to create employer table
        $sql = "CREATE TABLE JobOppotunity (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            position VARCHAR(50) NOT NULL,
            organization VARCHAR(50) NOT NULL,
            salaryRange VARCHAR(100) NOT NULL,
            contactName VARCHAR(30) NOT NULL,
            contactPhone VARCHAR(30) NOT NULL,
            contactEmail VARCHAR(50),
            employmentLocation VARCHAR(100) NOT NULL,
            attachment VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table JobOppotunity created successfully"; //uncomment this once table generation success is established
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); //uncomment this once table generation failure is established
    }

    $conn = null;
    //End of creating a table (statement is executed once if the are no tables created)


