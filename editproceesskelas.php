<?php
    require_once 'functions.php';
    $id = $_POST['id'];
    $topik = $_POST['topik'];
    $kelas = $_POST['kelas'];
    $kuota = $_POST['kuota'];
    $pengajar = $_POST['pengajar'];
    $tanggal = $_POST['tanggal'];
    $do = ubahrequest($id,$topik,$kelas,$kuota,$pengajar,$tanggal);
    if($do > 0 ){
        echo "
        <script>
        alert('Data berhasil diubah!');
            document.location.href = 'requestkelas.php'
        </script>
        ";
    }
    else{
        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href = 'requestkelas.php'
        </script>
        ";
    }