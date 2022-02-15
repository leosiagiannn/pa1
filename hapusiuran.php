<?php
require 'functions.php';
$id = $_GET["id"];
if(hapusiuran($id) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'iuran_admin.php'
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'iuran_admin.php'
        </script>
    ";
}