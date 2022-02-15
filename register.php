<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="images/logos.png" type="image/png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/form.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41" method="post">
                    Account register
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="register.php">
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="User name">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" type="submit">
                            Daftar
                        </button>
                    </div>
                    <center>
                        <p>Sudah punya akun?<a href="index.php">Masuk disini</a> </p>
                    </center>

                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pengguna = "pengguna";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $bool = true;
    $mysql = new mysqli("localhost", "root", "", "pa01");
    $query = $mysql->query("SELECT * FROM akun");
    while ($row = $query->fetch_array()) {
        $table_users = $row['username'];
        if ($username == $table_users) {
            $bool = false;
            print '<script>alert("Username sudah ada!");</script>';
            print '<script>window.location.assign("index.php");</script>';
        }
    }
    if ($bool) {
        $mysql->query("INSERT INTO akun (username, password, email, role) VALUES ('$username', '$password', '$email', '$pengguna')");
        print '<script>alert("Success mendaftar")</script>';
        print '<script>window.location.assign("index.php");</script>';
    }
}
?>