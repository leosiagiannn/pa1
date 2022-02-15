<?php
require 'functions.php';
$id = $_GET["id"];
if (hapusinfo($id) > 0) {
    echo "
        <script>
            alert('Informasi berhasil dihapus!');
            document.location.href = 'info.php'
        </script>
    ";
} else {
    echo "
        <script>
            alert('gagal menghapus informasi!');
            document.location.href = 'info.php'
        </script>
    ";
}