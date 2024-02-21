<?php 
include 'koneksi.php';
session_start();
if (!isset($_SESSION['userid'])) {
   header("location=home.php");
}elseif (isset($_GET['fotoid'])) {
   $fotoid = $_GET['fotoid'];

 mysqli_query($koneksi, "DELETE FROM `foto` WHERE `fotoid`='$fotoid'");
 header("location:profile.php");

}
 