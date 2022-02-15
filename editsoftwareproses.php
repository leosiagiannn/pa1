<?php 
	require 'functions.php';
	$id = $_POST['id'];
    $nama = $_POST['nama'];
	if (isset($_POST['edit_file'])) {
		$file = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$file_baru = date('dmYHis') . $file;
		$file = "uploads/" . $file_baru;
		if (move_uploaded_file($tmp, $path)) {
			$datasoftware = getOneSoftware($id);
			$hasil = mysqli_fetch_array($datasoftware, MYSQLI_ASSOC);
			if (is_file("uploads/" . $hasil['file'])) 
				unlink("uploads/" . $hasil['file']);
			$strQ ="UPDATE `software` 
					SET `id_software` = '$id', `nama_software` = '$nama', `file` = '$file_baru' 
					WHERE `software`.`id_software` = '$id'";
			if (ExecuteQuery($strQ)) {
				Print '<script>alert("Software berhasil diubah")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
			}else{
				Print '<script>alert("Software gagal diubah")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
			}
		}else{
			Print '<script>alert("File gagal diupload")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
		}
    }
    else{
		$strQ = "UPDATE `software` 
                    SET `id_software` = '$id', `nama_software` = '$nama'
                        WHERE `software`.`id_software` = '$id'";
		if (ExecuteQuery($strQ)) {
			Print '<script>alert("Software berhasil diubah")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
		}else{
			Print '<script>alert("Software gagal diubah")</script>';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Penyediaan software.php">';
		}
	}