<?php 
	require 'functions.php';
	$id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jabatan = $_POST['jabatan'];
	if (isset($_POST['edit_photo'])) {
		$photo = $_FILES['photo']['name'];
		$tmp = $_FILES['photo']['tmp_name'];
		$photo_baru = date('dmYHis') . $photo;
		$path = "uploads/" . $photo_baru;
		if (move_uploaded_file($tmp, $path)) {
			$datapengurus = getOnePengurus($id);
			$hasil = mysqli_fetch_array($datapengurus, MYSQLI_ASSOC);
			if (is_file("uploads/" . $hasil['photo'])) 
				unlink("uploads/" . $hasil['photo']);
			$strQ ="UPDATE `pengurus` 
					SET `id_pengurus` = '$id', `nama` = '$nama', `nim` = '$nim' ,`jabatan` = '$jabatan', `foto` = '$photo_baru' 
					WHERE `pengurus`.`id_pengurus` = '$id'";
			if (ExecuteQuery($strQ)) {
				Print '<script>alert("Data pengurus berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">';
			}else{
				Print '<script>alert("Data pengurus gagal diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">';
			}
		}else{
			Print '<script>alert("Gambar gagal diupload")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">';
		}
    }
    else{
		$strQ = "UPDATE `pengurus` 
                  SET `id_pengurus` = '$id', `nama` = '$nama',  `nim` = '$nim' , `jabatan` = '$jabatan'
                 WHERE `pengurus`.`id_pengurus` = '$id'";	
		if (ExecuteQuery($strQ)) {
			Print '<script>alert("Data pengurus berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">';
		}else{
			Print '<script>alert("Data pengurus berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengurus.php">';
		}
	}