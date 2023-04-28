<?php
//Log in start
session_start();

include("config.php");
include("assets/php/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 10";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: admin.php");
                    die;
                }
            }
        }

        echo "<script>alert('Wrong username or password')</script>";
    } else {
        echo "<script>alert('Please put username and password')</script>";
    }
}
//Log in end
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Log-In</title>
</head>

<body>

    <div class="container">
        <!-- Login Form Start -->
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card rounded-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">Sign in to
                            Account</h1>
                        <hr class="my-3">
                        <form method="post" class="px-3" id="login-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"> <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="text" name="user_name" id="user_name" class="form-control rounded-0"
                                    placeholder="Enter Username" autocomplete="off" required>
                            </div>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class=" form-control rounded-0"
                                    placeholder="Enter Password" autocomplete="off" required>
                                <span class="input-group-text rounded-0" id="show-password"
                                    onclick="togglePassword('password')">
                                    <i class="fas fa-eye fa-lg"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="form-check float-start">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Remember me
                                    </label>
                                </div>

                                <div class="forgot float-end">

                                    <a href="reset.php" id="forgot-link" style="text-decoration: none;">Forgot
                                        Password?</a>
                                </div>

                            </div>
                            <div class="form-group ">
                                <input type="submit" value="Sign In" id="login-btn"
                                    class="btn btn-primary btn-lg w-100 btn-block myBtn">
                            </div>
                        </form>
                    </div>
                    <div class="card justify-content-center rounded-right myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Hello Friends!</h1>
                        <hr class="my-3 bg-light myHr">
                        <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start
                            your journey with us!</p>
                        <div class="btn btn-outline-light btn-lg align-self-center
                           font-weight-bolder mt-4 myLinkBtn" id="register-link"><a href="sign-up.php"
                                style="text-decoration:none;color:white;">Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->
    </div>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/font-awesome.js"></script>
    <script src="assets/js/main.js"></script>
    </script>
</body>

</html>