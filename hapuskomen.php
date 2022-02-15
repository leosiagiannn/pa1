<?php
require 'functions.php';
$id = $_GET["id"];
if(hapuskomen($id) > 0){
    echo "
        <script>
            alert('Komentar berhasil dihapus!');
            document.location.href = 'contact.php'
        </script>
    ";
}else{
    echo "
        <script>
            alert('Komentar gagal dihapus!');
            document.location.href = 'contact.php'
        </script>
    ";
}