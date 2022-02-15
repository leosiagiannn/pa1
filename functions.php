<?php
    session_start();

    global $db;
    $db = mysqli_connect('localhost','root','','pa01'); 
    if(!$db){
        die("Database Connect Problem");
    }

   function ExecuteQuery($query){
        global $db;
        $result = mysqli_query($db,$query);

        return $result;
    }

    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[]= $row;
        }
        return $rows;
    }
     
    function redirect($_location)
    {
        header('Location: ' .$_location);
    }

    function LoginAccount($username,$password){
        $query = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
        $user = ExecuteQuery($query);
        return $user;
    }

    function tambahiuran($data){
        global $db;
        $nama = htmlspecialchars($data['nama']);
        $jumlah = htmlspecialchars($data['jumlah']);
        $tanggal = htmlspecialchars($data['tanggal']);
        $query = "INSERT INTO data_iuran VALUES ('','$nama','$jumlah','$tanggal')";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    }

    function tambahexp($data){
        global $db;
        $tujuan = htmlspecialchars($data['tujuan']);
        $jumlah = htmlspecialchars($data['jumlah']);
        $tanggal = htmlspecialchars($data['tanggal']);
        $query = "INSERT INTO data_pengeluaran VALUES ('','$tujuan','$jumlah','$tanggal')";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    }

    function TambahKomentar($id_akun,$nama,$komen){
        global $db;
        $query = "INSERT INTO komentar VALUES ('', '$id_akun','$nama','$komen', 'menunggu balasan')";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    }

    function tambahnotif($id_akun,$judul,$notif,$tanggal){
        global $db;
        $query = "INSERT INTO notifikasi VALUES ('', '$id_akun','$judul', '$notif', '$tanggal')";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    }

    function hapuskomen($id){
        global $db;
        mysqli_query($db, "DELETE FROM komentar WHERE id_komentar = $id");
        return mysqli_affected_rows($db);
    }

    function GetInfo($id){
        $query = "SELECT * FROM informasi WHERE id_informasi = '$id'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }

    function tambahinformasi($data , $file){
        global $db;
        $judul = htmlspecialchars($data['judul']);
        $informasi = htmlspecialchars($data['informasi']);
        $tanggal = htmlspecialchars($data['tanggal']);
        $query = "INSERT INTO informasi VALUES ('','$judul','$informasi','$file', '$tanggal')";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    }

    function getInformasi(){
        $query = "SELECT * FROM informasi ORDER BY id_informasi DESC LIMIT 6";
		$result = ExecuteQuery($query);
		return $result;
    }

    function getAllInfo(){
        $query = "SELECT * FROM informasi";
        $result = ExecuteQuery($query);
        $data = [];
        while($info = mysqli_fetch_assoc($result)){
            $data[] = $info;
        }
        return $data;
    }

    function hapusinfo($id){
        global $db;
        mysqli_query($db, "DELETE FROM informasi WHERE id_informasi = $id");
        return mysqli_affected_rows($db);
    }

    function ubahinfo($id, $judul,$informasi,$tanggal){
        global $db;
        $query = "UPDATE informasi SET judul = '$judul',
                 informasi = '$informasi', tanggal = '$tanggal' WHERE id_informasi = '$id'";
        // $result = ExecuteQuery($query);
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    function balaskomen($id, $reply){
        global $db;
        $query = "UPDATE komentar SET reply = '$reply' WHERE id_komentar = '$id'";
        // $result = ExecuteQuery($query);
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    /* Untuk Komentar */
    function getAllKomen(){
        $query = "SELECT * FROM komentar";
        $result = ExecuteQuery($query);
        $data = [];
        while($komen = mysqli_fetch_assoc($result)){
            $data[] = $komen;
        }
        return $data;
    }


    function getNamaKomen($id){
        $query = "SELECT username from akun where id_akun = '$id'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result);
        return $data['username'];
    }
    /* Untuk Komentar */


    function getAllIuran(){
        $query = "SELECT * FROM data_iuran";
        $result = ExecuteQuery($query);
        $data = [];
        while($iuran = mysqli_fetch_assoc($result)){
            $data[] = $iuran;
        }
        return $data;
    }

    function getAllExp(){
        $query = "SELECT * FROM data_pengeluaran";
        $result = ExecuteQuery($query);
        $data = [];
        while($exp = mysqli_fetch_assoc($result)){
            $data[] = $exp;
        }
        return $data;
    }

    /* Untuk notif */


    function hapusnotif($id){
        global $db; 
        mysqli_query($db, "DELETE FROM notifikasi WHERE id_notifikasi = $id");
        return mysqli_affected_rows($db);
    }

    function getAllAkun(){
        $query = "SELECT * FROM akun WHERE username !='admin'";
        $result = ExecuteQuery($query);
        $data = [];
        while($akun = mysqli_fetch_assoc($result)){
            $data[] = $akun;
        }
        return $data;
    }

    function getAllNotif(){
        $query = "SELECT * FROM notifikasi";
        $result = ExecuteQuery($query);
        $data = [];
        while($notif = mysqli_fetch_assoc($result)){
            $data[] = $notif;
        }
        return $data;
    }
    /* Untuk notif */

    function GetKelas(){
        $query = "SELECT * FROM kelas_tutor";
        $result = ExecuteQuery($query);
        $data = [];
        while($iuran = mysqli_fetch_assoc($result)){
            $data[] = $iuran;
        }
        return $data;
    }

    function hapusiuran($id){
        global $db;
        mysqli_query($db, "DELETE FROM data_iuran WHERE id_iuran = $id");
        return mysqli_affected_rows($db);
    }

    
    function hapusexp($id){
        global $db;
        mysqli_query($db, "DELETE FROM data_pengeluaran WHERE id_pengeluaran = $id");
        return mysqli_affected_rows($db);
    }

    function hapusrequest($id){
        global $db;
        mysqli_query($db, "DELETE FROM kelas_tutor WHERE id_kelas = $id");
        return mysqli_affected_rows($db);
    }

    function ubahiuran($id, $nama,$jumlah,$tanggal){
        global $db;
        $query = "UPDATE data_iuran SET nama_penyetor = '$nama',
                 jumlah = '$jumlah',tanggal = '$tanggal' WHERE id_iuran = '$id'";
        // $result = ExecuteQuery($query);
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    function ubahexp($id, $tujuan,$jumlah,$tanggal){
        global $db;
        $query = "UPDATE data_pengeluaran SET tujuan = '$tujuan',
                 jumlah = '$jumlah',tanggal = '$tanggal' WHERE id_pengeluaran = '$id'";
        // $result = ExecuteQuery($query);
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    function ubahrequest($id, $topik,$kelas,$kuota, $pengajar, $tanggal){
        global $db;
        $query = "UPDATE kelas_tutor SET topik = '$topik', kelas = '$kelas', kuota = '$kuota', pengajar = '$pengajar', tanggal= '$tanggal' WHERE id_kelas = '$id'";
        // $result = ExecuteQuery($query);
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    function GetIuran($id){
        $query = "SELECT * FROM data_iuran WHERE id_iuran = '$id'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result); //untuk memakai fungsi ini,data harus merupakan sebuah row data dari database
        return $data;
    }

    function GetRequestKelas($id){
        $query = "SELECT * FROM kelas_tutor WHERE id_kelas = '$id'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result); //untuk memakai fungsi ini,data harus merupakan sebuah row data dari database
        return $data;
    }

    function getPengurus(){
        $query = "SELECT * FROM pengurus";
        $result = ExecuteQuery($query);
        return $result;
    }

    function getOnePengurus($id){
        $query = "SELECT * FROM pengurus where id_pengurus= '$id'";
        $result = ExecuteQuery($query);
        return $result;
    }

    function getOneAnggota($id){
        $query = "SELECT * FROM anggota where id_anggota= '$id'";
        $result = ExecuteQuery($query);
        return $result;
    }

    function getOneInfo($id){
        $query = "SELECT * FROM informasi where id_informasi= '$id'";
        $result = ExecuteQuery($query);
        return $result;
    }

	function hapusPengurus($id){
		$query = "delete from pengurus where id_pengurus='$id'";
		ExecuteQuery($query);
    }

    function hapusAnggota($id){
		$query = "delete from anggota where id_anggota='$id'";
		ExecuteQuery($query);
    }
    
    
    function getAllAnggota(){
        $query = "SELECT * FROM anggota";
        $result = ExecuteQuery($query);
        $data = [];
        while($anggota = mysqli_fetch_assoc($result)){
            $data[] = $anggota;
        }
        return $data;
    }

     /* Untuk software */

     function tambahsoftware($data, $gambar, $file){
        global $db;
        $nama_software = htmlspecialchars($data['nama_software']);
        $query = "INSERT INTO software VALUES ('', '$nama_software', '$gambar', '$file')";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    }


    function getAllsoftware(){
        $query = "SELECT * FROM software";
        $result = ExecuteQuery($query);
        $data = [];
        while($software = mysqli_fetch_assoc($result)){
            $data[] = $software;
        }
        return $data;
    }


    function GetSoftware($id){
        $query = "SELECT * FROM software WHERE id_software = '$id'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }


    function getOneSoftware($id){
        $query = "SELECT * FROM software WHERE id_software='$id'";
        $result = ExecuteQuery($query);
        return $result;
    }

    function ubahsoftware($id, $nama_software){
        global $db;
        $query = "UPDATE software SET nama_software = '$nama_software' WHERE id_software = '$id'";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }


    function hapussoftware($id){
        global $db;
        mysqli_query($db, "DELETE FROM software WHERE id_software = $id");
        return mysqli_affected_rows($db);
    }
    /* Untuk software */