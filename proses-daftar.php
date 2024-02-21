<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$profile = $_FILES['alam.jpeg']['name'];

$sql = "INSERT INTO `user` VALUES('$username','$password','$email','$namalengkap','$alamat','$jeniskelamin','$profile')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    ?>
    <script>
      window.location.assign('index.php');
      alert('selamat anda berhasil daftar');
    </script>
    <?php
  }
