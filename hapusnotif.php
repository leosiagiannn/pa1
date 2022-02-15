<?php
require 'functions.php';
$id = $_GET["id"];
if (hapusnotif($id) > 0) {
    echo "
        <script>
            alert('Komentar berhasil dihapus!');
            document.location.href = 'notif.php'
        </script>
    ";
} else {
    echo "
        <script>
            alert('Komentar gagal dihapus!');
            document.location.href = 'notif.php'
        </script>
    ";
}