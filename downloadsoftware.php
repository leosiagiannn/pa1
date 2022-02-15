<?php 
	require_once 'functions.php';

	$id = $_GET["id"];

	$file = GetSoftware($id);

	$place = 'uploads/'.$file['file'];

	if(file_exists($place)){
		header('Cotent-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'. basename($place). '"');
		header('Expires' . 0);
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: '. filesize($place));
		readfile($place);
		exit;
	}
?>