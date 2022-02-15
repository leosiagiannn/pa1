<?php
    require_once 'functions.php';
    if (isset($_POST["submit"])) {
        $nama = $_POST['nama_software'];
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $gambar_baru = date('dmYHis').$gambar;
        $path = "uploads/".$gambar_baru;
        $file = $_FILES['file']['name'];
        $tmp1 = $_FILES['file']['tmp_name'];
        $file_baru = date('dmYHis').$file;
        $path1 = "uploads/".$file_baru;
        $strQ ="INSERT INTO software
        VALUES('','$nama', '$gambar_baru','$file_baru')"; 
        if(move_uploaded_file($tmp, $path)){
            if(move_uploaded_file($tmp1,$path1)){
            if(ExecuteQuery($strQ)){
                Print '<script>alert("Software berhasil ditambahkan")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
            }else{
                Print '<script>alert("Software gagal ditambahkan")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
            }
            }
            else{
                Print '<script>alert("File gagal diupload")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">'; 
            }
        }
        else{
            Print '<script>alert("Gambar gagal diupload")</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
        }
    }