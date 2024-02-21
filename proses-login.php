<?php 

include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);
if ($cek==1) {
  while ($data = mysqli_fetch_array($sql)) {
    $_SESSION['userid'] = $data['userid'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['namalengkap'] = $data['namalengkap'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['alamat'] = $data['alamat'];
    $_SESSION['jeniskelamin'] = $data['jeniskelamin'];
    $_SESSION['profile'] = $data['profile'];
    ?>
    <script>
      window.location.assign('home.php');
      alert('selamat anda berhasil login');
    </script>
    <?php
  
  }

}else {
  ?>
  <script>
    window.location.assign('index.php');
    alert('ulangi login anda');
  </script>
  <?php

}

   