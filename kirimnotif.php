<?php
    require_once 'functions.php';
    $id_akun = $_POST['id_akun'];
    $judul = $_POST['judul'];
    $notif = $_POST['notif'];
    $tanggal  = $_POST['date'];
    $tambah = tambahnotif($id_akun,$judul,$notif,$tanggal);
    if ($id_akun != "Id Akun") { 
        if($tambah > 0 ){
            echo "
                <script>
                    alert('Notifikasi berhasil dikirimkan');
                    document.location.href = 'notif.php'
                </script>
            ";
        }
        else {
            echo "
            <script>
                    alert('Gagal Mengirimkan Notifikasi');
                    document.location.href = 'notif.php'
            </script>
            ";
        }
    }
    else {
        echo "
            <script>
                    alert('Masukkan id akun dengan benar');
                    document.location.href = 'iuran_admin.php'
            </script>
            ";
    }