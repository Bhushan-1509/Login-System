<?php
    session_start();
    $user = "";
    if(isset($_SESSION['username']) != true && isset($_SESSION['id']) != true ){
        header("location:sign-in.php");
    }
    else{
        $user = $_SESSION['username'];
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/script.js"></script>

</head>

<body>

    <div class="container welcome-page-div">
        <div class="alert alert-warning" role="alert">
             <img src="images/user-icon.png" alt="">
             <h4 class="alert-heading">Welcome <?php echo $user;?></h4> 
        </div>

        <div class="container">
            <button class="btn btn-danger" id ='logoutbtn' onclick="location.assign('logout.php')">Log out</button>
        </div>

    </div>

</body>
<script src="js/bootstrap.min.js"></script>
</html>