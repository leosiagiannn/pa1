<?php
require_once 'functions.php';
$username = $_POST['username'];
$password = $_POST['password'];
$user = LoginAccount($username, $password);
$row  = mysqli_fetch_assoc($user);
if ($row['username'] ==  $username && $row['password'] == $password) {
    $_SESSION['logged_in'] = TRUE;
    $_SESSION['id_akun'] = $row['id_akun'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    if ($row['role'] == "admin") {
        echo "<script>alert('Selamat datang $username');
                window.location = 'dashboard.php'</script>";
    } elseif ($row['role'] == "pengguna") {
        echo "<script>alert('Selamat datang $username');
                window.location = 'dashboard_user.php'</script>";
    }
} else {
    echo "<script>alert('Username dan Password tidak valid.');
                window.location = 'index.php'</script>";
}