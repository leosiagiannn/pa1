<?php
    require_once 'functions.php';


    if(isset($_SESSION['logged_in'])){
        unset($_SESSION['username']);
        unset($_SESSION['logged_in']);
        unset($_SESSION['role']);
        session_destroy();
    }
    header("location: index.php");
?>