//Our web application flow starts from this index.php file 
//This file simply contains the code for checking logged in user.

<?php
    session_start();
    if(isset($_SESSION['username']) != true && isset($_SESSION['id']) != true){
        header("location:sign-in.php");
    }
    else{
        header("location:welcome.php");
    }

?>
