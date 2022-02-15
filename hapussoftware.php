<?php
require 'functions.php';
$id = $_GET["id"];
if(hapussoftware($id) > 0){
    echo "
        <script>
            alert('Software berhasil dihapus!');
            document.location.href = 'Penyediaan software.php'
        </script>
    ";
}else{
    echo "
        <script>
            alert('Gagal menghapus Software!');
            document.location.href = 'Penyediaan software.php'
        </script>
    ";
}