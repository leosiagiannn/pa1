<?php
session_start();
include_once('function.php');
open_page('Forgot Passoword');
?>
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
<?php
$username = $_POST['username'];
$email = $_POST['email'];
$mysql = new mysqli("localhost", "root", "", "pa01");
$query = $mysql->query("SELECT * FROM akun");
while ($row = $query->fetch_array()) {
	$id = $row['username'];
	$e = $row['email'];
	$role = $row['role'];
	if ($username == $id && $email == $e) { ?>
<script type="text/javascript">
function reload() {
    img = document.getElementById("capt");
    img.src = "captcha_creator.php?rand_number=" + Math.random();
}
</script>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/form.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41" method="post">
                    Account Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="checkcaptcha.php">
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="newpassword" placeholder="New Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="input100" name="t1" placeholder="Masukkan captcha dibawah"
                            required="required">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div><br>
                    <div>
                        <center>
                            <img src="captcha_creator.php" id="capt" width="100">
                            <input type="button" onClick=reload() ; value='Reload Captcha'
                                style="background-color:lightgrey;">
                        </center>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" type="submit">
                            Submit
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
<?php
		exit;
	}
}
$cek = true;
if (isset($cek)) {
	print '<script>alert("Username atau email anda Salah")</script>';
	// echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lupapassword.php">';
}
?>