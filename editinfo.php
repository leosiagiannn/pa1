<?php 
	require 'functions.php';
	$id = $_POST['id'];
    $judul = $_POST['judul'];
    $informasi = $_POST['informasi'];
    $tanggal = $_POST['tanggal'];
	if (isset($_POST['edit_file'])) {
		$file = $_FILES['file_tambahan']['name'];
		$tmp = $_FILES['file_tambahan']['tmp_name'];
		$file_baru = date('dmYHis') . $file;
		$path = "uploads/" . $file_baru;
		if (move_uploaded_file($tmp, $path)) {
			$datainfo = getOneInfo($id);
			$hasil = mysqli_fetch_array($datainfo, MYSQLI_ASSOC);
			if (is_file("uploads/" . $hasil['file'])) 
				unlink("uploads/" . $hasil['file']);
			$strQ ="UPDATE `informasi` 
					SET `id_informasi` = '$id', `judul` = '$judul', `informasi` = '$informasi' , `file_tambahan` = '$file_baru' ,`tanggal` = '$tanggal'
					WHERE `informasi`.`id_informasi` = '$id'";
			if (ExecuteQuery($strQ)) {
				Print '<script>alert("Informasi berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
			}else{
				Print '<script>alert("Informasi gagal diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
			}
		}else{
			Print '<script>alert("Gambar gagal diupload")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
		}
    }
    else{
		$strQ = "UPDATE `informasi` 
                SET `id_informasi` = '$id', `judul` = '$judul', `informasi` = '$informasi' ,`tanggal` = '$tanggal'
                WHERE `informasi`.`id_informasi` = '$id'";
		if (ExecuteQuery($strQ)) {
			Print '<script>alert("Informasi berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
		}else{
			Print '<script>alert("Informasi berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=info.php">';
		}
	}