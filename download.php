<?php 
	require_once 'functions.php';

	$id = $_GET["id"];

	$info = GetInfo($id);

	$place = 'informasi/'.$info['file_tambahan'];

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