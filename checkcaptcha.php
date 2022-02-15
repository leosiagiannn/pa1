<?php
session_start();
$pw = $_POST['newpassword'];
$uname = $_POST['username'];
if ($_POST['t1'] == $_SESSION['my_captcha']) {
    $mysql = new mysqli("localhost", "root", "", "pa01");
    $query = $mysql->query("SELECT * FROM akun");
    while ($row = $query->fetch_array()) {
        $nama = $row['username'];
        $id = $row["id_akun"];
        if ($uname === $nama) {
            $mysql->query("UPDATE akun SET password='$pw' WHERE id_akun='$id'");
            print '<script>alert("Berhasil mengganti password")</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
            exit;
        }
    }
    $cek = true;
    if (isset($cek)) {
        print '<script>alert("Username tidak sesuai")</script>';
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lupapassword.php">';
        exit;
    }
} else {
    print '<script>alert("Captcha yang anda masukkan tidak sesuai")</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lupapassword.php">';
}