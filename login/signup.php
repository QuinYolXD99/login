<?php
session_start();
require_once "config.php";
if ($_SESSION['login'] == true) {
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="signUp">
    <br><br>
    <div class="row signUp">
        <div class="col-md-4"></div>
        <div class="col-md-4 signUpForm container ">
            <br>
            <br>
            <div class="card container form">
                <div class="card-header">
                    <p class="text-center h4">Sign Up</p>
                </div>

                <div class="form-group">
                    <label for="fname" class="bmd-label-floating">First Name</label>
                    <input type="text" class="form-control supF" id="fname" required>
                </div>
                <div class="form-group">
                    <label for="lname" class="bmd-label-floating">Last Name</label>
                    <input type="text" class="form-control supF" id="lname" required>
                </div>
                <div class="form-group">
                    <label for="email" class="bmd-label-floating">Email</label>
                    <input type="email" class="form-control supF" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" required>
                </div>
                <div class="form-group">
                    <label for="password" class="bmd-label-floating">Password</label>
                    <input type="password" class="form-control supF" id="password" required>
                </div>

                <br>
                <center>
                    <input type="submit" class="btn btn-outline-primary " id="sup" value="Sign Up">
                    <a href="login.php"> <input type="submit" class="btn btn-outline-primary" id="login" value="Log In"></a>

                </center>
                <br>
            </div>
            <br>

        </div>
        <div class="col-md-4"></div>
    </div>



    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <script>
        $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
            var valid = true;

            $(document).keypress(function (event) {
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    $("#sup").click();
                }
            });
        });
    </script>
</body>

</html>