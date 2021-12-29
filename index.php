//Our web application flow starts from this index.php file 

<?php
    session_start();
    if(isset($_SESSION['username']) != true && isset($_SESSION['id']) != true){
        header("location:sign-in.php");
    }
    else{
        header("location:welcome.php");
    }

?>
