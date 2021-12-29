    <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<?php
    include "components/_dbconnect.php";
    
    $error = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['email']) && isset($_POST['password'])){
            //include "components/_dbconnect.php";
            $host = constant("HOSTNAME");
            $username = constant("USERNAME");
            $password = constant("PASSWORD");
            $database = constant("DATABASE");
            $port = constant("PORT");
            $connection = new mysqli($host, $username, $password, $database, $port);
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fetchPasswordQuery = "SELECT password FROM `users_records_db` WHERE `email` = '$email'";
            $resultObj = $connection -> query($fetchPasswordQuery);
            $fetchedPasswordHatch = $resultObj -> fetch_array();
            $passwordVerification = password_verify($password,$fetchedPasswordHatch['password']);

            $condition = "SELECT * FROM `users_records_db` WHERE `email` = '$email'";
            $result = $connection -> query($condition);
            $resultantRow = $result->fetch_array();

            if((strcmp($email,$resultantRow['email']) == 0) && $passwordVerification == true){
                session_start(); 
                $_SESSION['username'] =  $resultantRow['first_name'];
                $_SESSION['id'] = $resultantRow['id'];
                header("location:welcome.php");
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">It seems like you have not created account yet !</h4>
                </div>';
                
                echo '<div class="container" style="margin: 10% 45%">
                <button type="button" class="btn btn-outline-secondary" id="signinProcessLoginBtn" onclick = "location.assign("sign-up.php")">Register</button>
                </div>';
                
            }
        }
    }

    
    
?>

