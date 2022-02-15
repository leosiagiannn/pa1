<?php 
	require 'functions.php';
	if(hapusAnggota($_GET['id'])){
		redirect('anggota.php');
    }else{
         redirect('anggota.php');
    }