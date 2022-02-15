<?php 
	require 'functions.php';
	if(hapusPengurus($_GET['id'])){
		redirect('pengurus.php');
    }else{
         redirect('pengurus.php');
    }