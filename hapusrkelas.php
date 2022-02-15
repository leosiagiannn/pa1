<?php
require 'functions.php';
$id = $_GET["id_kelas"];
if(hapusrequest($id) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'requestkelas.php'
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data gagal dihapus!');
        </script>
    ";
}