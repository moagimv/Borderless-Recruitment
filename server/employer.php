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

        //create job oppotunity application

        if(isset($_POST['position']) && isset($_POST['organization']) && isset($_POST['salary']) && isset($_POST['person']) && isset($_POST['phone']) && isset($_POST['email'])&& isset($_POST['location']) && isset($_POST['attachment'])){
            $position = $_POST['position'];
            $organisation = $_POST['organization'];
            $salary = $_POST['salary'];
            $person = $_POST['person'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $location = $_POST['location'];
            $attachment = $_POST['attachment'];
            

            $sql = 'INSERT INTO Student(position, organization, salaryRange, contactName, contactPhone, contactEmail,employmentLocation, attachment) VALUES(:position, :organization, :salary, :person, :email, :locations, :attachment)';
            
            $statement = $conn->prepare($sql);

            if($statement->execute(['position' => $position, 'organization' => $organization, 'salary' => $salary, 'person' => $person,'email' => $email ,'locations' => $location , 'attachment' => $attachment])){
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