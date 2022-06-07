<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'borderlessDB';   

    //$Msg = '';
    $sql = '';

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST['submitStudentAppplication'])){
        
            //create student application
            if(isset($_POST['f-name']) && isset($_POST['l-name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['country']) && isset($_POST['university']) && isset($_POST['qualification']) && isset($_POST['identity']) && isset($_POST['passport']) && isset($_POST['results'])){
                $fname = $_POST['f-name'];
                $lname = $_POST['l-name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $country = $_POST['country'];
                $university = $_POST['university'];
                $qualification = $_POST['qualification'];
                $identityCopy = $_POST['identity'];
                $passport = $_POST['passport'];
                $results = $_POST['results'];

                $sql = 'INSERT INTO Student(firstname, lastname, email, phone, originCountry, studyUniversity, studyCourse, copyOfID, copyOfPassport, copyOfResults) VALUES(:fname, :lname, :email, :phone, :country, :university, :qualification, :identityCopy, :passport, :results)';
                
                $statement = $conn->prepare($sql);

                if($statement->execute(['fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone,'country' => $country ,'university' => $university ,'qualification' => $qualification, 'identityCopy' => $identityCopy,'passport' => $passport,'results' => $results])){
                    //$Msg = 'data inserted successfully';
                    header('location: ../studentRegister.php?success');
                }else{
                    //$Msg = 'data coult not inserted successfully';
                    header('location: ../studentRegister.php?error');
                }
            }
        }
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); //uncomment this once table generation failure is established
    }
?>