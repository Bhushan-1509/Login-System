<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Register Yourself !</title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="sign-in.php">
                <button class="btn btn-success">Sign In</button>
            </a>
        </div>
    </nav>
    <div class="container main-div">
        <div class="mb-3 divElements">
            <h3>Register here !</h3>
        </div>
        <form method="post" action="signupprocess.php"> 
            <div class="mb-3 divElements">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="first-name-field" aria-describedby="emailHelp" name="first-name" required>
            </div>
            <div class="mb-3 divElements">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last-name-field" name="last-name" required>
            </div>

            <div class="mb-3 divElements">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" id="last-name-field" name="email" required>
            </div>
            <div class="mb-3 divElements">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="last-name-field" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>