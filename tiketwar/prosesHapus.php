<?php 
session_start();
if(isset($_POST["hapus"])){
    unset($_SESSION["daftarwar"][$-POST["hapus"]]);
}
header("Location: dashboard.php");
exit;