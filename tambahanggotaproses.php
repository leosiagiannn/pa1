<?php
    require 'functions.php';
    if(isset($_POST['tambahkan'])) { 
        $nama = $_POST['nama'];
        $status = $_POST['status'];
        $nim = $_POST['nim'];
        $photo = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        $photo_baru = date('dmYHis') . $photo;
        $path = "uploads/" . $photo_baru;
        $strQ ="INSERT INTO anggota
                VALUES('','$nim','$nama', '$status','$photo_baru')";
        if(move_uploaded_file($tmp, $path)){
            if(ExecuteQuery($strQ)){
                Print '<script>alert("Anggota telah ditambahkan")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
            }else{
                Print '<script>alert("Anggota gagal ditambahkan")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
            }
        }else{
            Print '<script>alert("Gambar gagal diupload")</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
        }
    }