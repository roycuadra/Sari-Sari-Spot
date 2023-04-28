<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Forgot-password</title>
</head>

<body>
    <div class="container">
        <!-- Reset Form start -->
        <div class="row justify-content-center wrapper" id="forgot-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card justify-content-center rounded-right myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Reset Password</h1>
                        <hr class="my-3 bg-light myHr">

                        <button class="btn btn-outline-light btn-lg align-self-center
                           font-weight-bolder mt-4 myLinkBtn" id="back-link"><a href="login.php" style="text-decoration:none;color:white;">Back</a> </button>
                    </div>
                    <div class="card rounded-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">Forgot your Password</h1>
                        <hr class="my-3">
                        <p class="lead text-center text-secondary">To reset your password, entered the registered e-mail
                            add we will send instructions on your e-mail</p>
                        <form method="post" class="px-3" id="login-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"> <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="femail" class="form-control rounded-0"
                                    placeholder="E-Mail" required>
                            </div>
                            <div class="form-group ">
                                <input type="submit" value="Reset Password" id="forgot-btn"
                                    class="btn btn-primary btn-lg w-100 btn-block myBtn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reset Form end -->
    </div>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/font-awesome.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>