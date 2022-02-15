<?php
    require 'functions.php';
    if(isset($_POST['tambahkan'])) { 
        $judul = $_POST['judul'];
        $informasi = $_POST['informasi'];
        $tanggal = $_POST['tanggal'];
        $file = $_FILES['file_tambahan']['name'];
        $tmp = $_FILES['file_tambahan']['tmp_name'];
        
        $file_baru = date('dmYHis') . $file;
        $path = "uploads/" . $file_baru;
        $strQ ="INSERT INTO informasi
                VALUES('','$judul','$informasi', '$file_baru','$tanggal')";
        if(move_uploaded_file($tmp, $path)){
            if(ExecuteQuery($strQ)){
                Print '<script>alert("Informasi berhasil ditambahkan")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
            }else{
                Print '<script>alert("Informasi gagal ditambahkan")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
            }
        }else{
            Print '<script>alert("Gambar gagal diupload")</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
        }
    }