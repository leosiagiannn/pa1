<?php
    require_once 'functions.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $do = ubahiuran($id,$nama,$jumlah,$tanggal);

    if($do > 0 ){
        echo "
        <script>
        alert('Data berhasil diubah!');
        document.location.href = 'iuran_admin.php'
        </script>
        ";
    }
    else{
        echo "
        <script>
                alert('Data gagal diubah!');
                document.location.href = 'iuran_admin.php'
        </script>

        ";
    }

?>