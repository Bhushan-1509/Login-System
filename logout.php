<?php

    session_start();
    session_unset();
    session_destroy();
    //redirecting to the signin page
    header("location:sign-in.php");

?>
