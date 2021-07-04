<?php
    $con = mysqli_connect("localhost", "root", "", "expense_management") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>