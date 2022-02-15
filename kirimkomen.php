<?php
require_once 'functions.php';
if (!isset($_SESSION['logged_in'])) {
    header('location: index.php');
}
$id_akun = $_GET['id_akun'];
$nama = getNamaKomen($id_akun);
$komen = $_POST['komentar'];
$kirim = TambahKomentar($id_akun, $nama, $komen);
if ($kirim > 0) {
    echo "
                <script>
                    alert('Komentar berhasil dikirimkan');
                    document.location.href = 'contact1.php'
                </script>
            ";
} else {
    echo "
            <script>
                    alert('Gagal Mengirimkan Komentar');
                    document.location.href = 'contact1.php'
            </script>
            ";
}