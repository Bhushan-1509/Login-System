<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php
include_once "components/_dbconnect.php";
include_once "components/_filter_input.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
//    include "components/_filter_input.php";
    
    $firstName = filter_data($firstName);
    $lastName = filter_data($lastName);
    $email = filter_data($email);
    $password = filter_data($password);
    $passwordHash = password_hash($password,PASSWORD_DEFAULT);
    
    // $sqlQuery = "INSERT INTO `$DATABASE.users_records_db` VALUE(first_name,last_name,email,password) ($firstName,$lastName,$email,$password)";
    //include_once "components/_dbconnect.php";
    $host = constant("HOSTNAME");
    $username = constant("USERNAME");
    $password = constant("PASSWORD");
    $database = constant("DATABASE");
    $port = constant("PORT");

    $connection = new mysqli($host, $username, $password, $database, $port);
    $emailExitsOrNot = "SELECT * FROM `users_records_db` WHERE `email` = '$email'";
    $queryResult = $connection->query($emailExitsOrNot);
    $noOfRows = $queryResult->num_rows;

    if ($noOfRows == 0) {
        $sqlQuery = "INSERT INTO `users_records_db` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL, '$firstName', '$lastName', '$email', '$passwordHash');";
        $result = $connection->query($sqlQuery);

        // executeQuery($sqlQuery);
        if ($result != false) {
            echo '<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Successfully created your account !</h4>
            
          </div>';
        } 
        else {
            echo '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Failed to to create your account !</h4>
          </div>';
        }
    }
        else {
        echo '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">You cannot create account with same email address !</h4>
          </div>';
          die;
    }
}

?>


<div class="container" style="margin: 10% 45%">
    <button type="button" class="btn btn-outline-success" id="signupProcessLoginBtn">Login</button>

</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
