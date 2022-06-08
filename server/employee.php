<?php
    //Start of creating a table (statement is executed once if the are no tables created)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "borderlessDB";

    $message = '';
    $sql = '';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         //create Employement application

         if(isset($_POST['f-name']) && isset($_POST['l-name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['country']) && isset($_POST['position']) && isset($_POST['idCopy']) && isset($_POST['cv']) && isset($_POST['results'])){
            $fname = $_POST['f-name'];
            $lname = $_POST['l-name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $country = $_POST['country'];
            $position = $_POST['position'];
            $identityCopy = $_POST['idCopy'];
            $cv = $_POST['cv'];
            $results = $_POST['results'];

            $sql = 'INSERT INTO Student(firstname, lastname, email, phone, originCountry, position,copyOfID, copyOfCV, copyOfResults) VALUES(:fname, :lname, :email, :phone, :country, :position, :identityCopy, :cv, :results)';
            
            $statement = $conn->prepare($sql);

            if($statement->execute(['fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone,'country' => $country ,'position' => $position , 'identityCopy' => $identityCopy,'cv' => $cv,'results' => $results])){
                $message = 'data inserted successfully';
            }else{
                $message = 'data coult not inserted successfully';
            }
        }

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); //uncomment this once table generation failure is established
    }

    $conn = null;
    //End of creating a table (statement is executed once if the are no tables created)


?>