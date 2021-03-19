<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4" id="alert">
                <div class="alert alert-success">
                    <strong id="result">Hello World!</strong>
                </div>
            </div>
        </div>

        <!-- Login Form -->

        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <h2 class="text-center mt-2">Login</h2>
                <form action="" method="post" role="form" class="p-2" id="login-frm">
                    <div class="form-group p-2">
                        <input type="text" name="username" class="form-control" placeholder="User name" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group p-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                            <label for="customCheck" class="custom-control-label">Remember Me</label>
                            <a href="#" id="forgot-btn" class="float-right">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">New User?<a href="#" id="register-btn">Register Here</a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Registration Form -->

        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                <h2 class="text-center mt-2">Register</h2>
                <form action="" method="post" role="form" class="p-2" id="register-frm">
                    <div class="form-group p-2">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="uname" class="form-control" placeholder="User Name" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group p-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rem" class="custom-control-input" id="customChec2">
                            <label for="customCheck2" class="custom-control-label">I agree to the <a href="#">terms & conditions</a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" id="register" value="Register" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">Already registered?<a href="#" id="login-btn">login here</a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Forgot Form -->

        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Reset Password</h2>
                <form action="" method="post" role="form" class="p-2" id="forgot-frm">
                    <div class="form-group">
                        <small class="text-muted">
                            To reset your password, enter the email address and we will send reset password instructions on your email.
                        </small>
                    </div>
                    <div class="form-group p-2">
                        <input type="email" name="femail" class="form-control" placeholder="Email" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group text-center">
                        <a href="#" id="back-btn">Back</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>