<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:login_page.php');
    
}
$id_session= $_SESSION['user_id'];
?>

