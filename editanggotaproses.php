<?php 

	require 'functions.php';

	
	$id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $status = $_POST['status'];
    


	if (isset($_POST['edit_photo'])) {
		$photo = $_FILES['photo']['name'];
		$tmp = $_FILES['photo']['tmp_name'];
		
		$photo_baru = date('dmYHis') . $photo;
		$path = "uploads/" . $photo_baru;

		if (move_uploaded_file($tmp, $path)) {
			$datapengurus = getOneAnggota($id);
			$hasil = mysqli_fetch_array($dataanggota, MYSQLI_ASSOC);
			if (is_file("uploads/" . $hasil['photo'])) 
				unlink("uploads/" . $hasil['photo']);
		
			$strQ ="UPDATE `anggota` 
					SET `id_anggota` = '$id', `nama` = '$nama', `nim` = '$nim' ,`status` = '$status', `foto` = '$photo_baru' 
					WHERE `anggota`.`id_anggota` = '$id'";

			if (ExecuteQuery($strQ)) {
				Print '<script>alert("Data anggota berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
			}else{
				Print '<script>alert("Data anggota gagal diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
			}

		}else{
			Print '<script>alert("Gambar gagal diupload")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
		}
    }
    else{

		$strQ = "UPDATE `anggota` 
                  SET `id_anggota` = '$id', `nama` = '$nama',  `nim` = '$nim' , `status` = '$status'
                 WHERE `anggota`.`id_anggota` = '$id'";	
		if (ExecuteQuery($strQ)) {
			Print '<script>alert("Data anggota berhasil diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
		}else{
			Print '<script>alert("Data anggota gagal diubah")</script>';
		        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=anggota.php">';
		}
	}





 ?>