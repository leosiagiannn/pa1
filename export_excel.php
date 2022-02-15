<?php
require_once 'functions.php';
if (!isset($_SESSION['logged_in'])) {
    header('location: index.php');
}
$output = '';
?>
<?php
if (isset($_POST["export"])) {
    $query = "SELECT * FROM data_iuran";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        $output .= '
            <h2>Data Iuran Del UI/UX Club</h2>
            <table style="width:90%;margin-top:25px;" border="2">
            <tr style="color:black;">
                <th><strong>ID Pembayaran</strong></th>
                <th><strong>Nama Penyetor</strong></th>
                <th><strong>Jumlah</strong></th>
                <th><strong>Tanggal</strong></th>
            </tr>
            ';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
                         <tr style="color:black;">
                                <td>' . $row["id_iuran"] . '</td>
                                <td>' . $row["nama_penyetor"] . '</td>
                                <td>Rp.' . $row["jumlah"] . ',-</td>
                                <td>' . $row["tanggal"] . '</td>
                            </tr>
                ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=dataIuran.xls');
        echo $output;
    }
}
?>