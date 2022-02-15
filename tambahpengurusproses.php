<?php
    require 'functions.php';
    if(isset($_POST['tambahkan'])) { 
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $nim = $_POST['nim'];
        $photo = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        $photo_baru = date('dmYHis') . $photo;
        $path = "uploads/" . $photo_baru;
        $strQ ="INSERT INTO pengurus
                VALUES('','$nama','$nim', '$jabatan','$photo_baru')";
        if(move_uploaded_file($tmp, $path)){
            if(ExecuteQuery($strQ)){
                Print '<script>alert("Pengurus berhasil ditambahkan")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">';
            }else{
                Print '<script>alert("Pengurus gagal ditambahkan")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">';
            }
        }else{
            Print '<script>alert("Gambar gagal diupload")</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">'; 
        }
    }