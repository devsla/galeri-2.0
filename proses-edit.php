<?php 

/* ini_set('display_error',1);
error_reporting(E_ALL);
include 'koneksi.php';
session_start();

$fotoid = $_POST['fotoid'];
$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$tanggalunggah = date("Y-m-d");
$albumid = $_POST['albumid'];
$userid = $_SESSION['userid'];
$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['lokasifile']['name'];
$ukuran = $_FILES['lokasifile']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (in_array($ext, $ekstensi)) {
    $xx = $rand.'_'.$filename;
    $upload = move_uploaded_file($_FILES['lokasifile']['tmp_name'],'img/'.$rand. '_'. $filename);
    $stmt = $koneksi->prepare("UPDATE `foto` SET `judulfoto`=?, `deskripsifoto`=?, `tanggalunggah`=?, `albumid`=?, `userid`=?, `xx`=? WHERE `fotoid`=?");

    if ($stmt === false) {
        die('Error preparing the statement: ' . $koneksi->error);
    }
    
    $stmt->bind_param("ssssss", $judulfoto, $deskripsifoto, $tanggalunggah, $albumid, $userid, $xx, $fotoid);
    
    if ($stmt->execute()) {
        header("location:edit-foto.php");
    } else {
        echo "Error updating record: " . $stmt->error;
    }*/
    
   /* if ($upload) {
        $stmt = $koneksi->prepare("UPDATE `foto` SET `judulfoto`=?, `deskripsifoto`=?, `tanggalunggah`=?, `albumid`=?, `userid`=?, `xx`=? WHERE `fotoid`=?");
        $stmt->bind_param("ssssss", $judulfoto, $deskripsifoto, $tanggalunggah, $albumid, $userid, $xx, $fotoid);

        if ($stmt->execute()) {
            header("location:edit-foto.php");
        } else {
            echo "Error updating record: " . $stmt->error;
        }
    } else {
        print_r($_FILES['lokasifile']['error']);
    }
} else {
    echo "Invalid file extension.";
}
}*/

/*include "koneksi.php";



$userid=$_POST['userid'];

$username=$_POST['username'];



// Cek apakah user ingin mengubah fotonya atau tidak

if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :

    // Ambil data foto yang dipilih dari form

    $sumber = $_FILES['lokasifile']['name'];

    $nama_gambar = $_FILES['lokasifile']['tmp_name'];

    

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload

    $fotobaru = date('dmYHis').$sumber;

    

    // Set path folder tempat menyimpan fotonya

    $path = "img/".$fotobaru;



    if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak

        // Query untuk menampilkan data user berdasarkan userid yang dikirim

        $query = "SELECT * FROM user WHERE userid='".$userid."'";

        $sql = mysqli_query($query); // Eksekusi/Jalankan query dari variabel $query

        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql



        // Cek apakah file gambar sebelumnya ada di folder foto

        if(is_file("img/".$data['lokasifile'])) // Jika gambar ada

            unlink("img/".$data['lokasifile']); // Hapus file gambar sebelumnya yang ada di folder images

        

        // Proses ubah data ke Database

        $query = "update user set username='$username', img='$fotobaru' where userid='$userid' ";

        $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query



        if($sql){ // Cek jika proses simpan ke database sukses atau tidak

            // Jika Sukses, Lakukan :

            header("location: edit-foto.php"); // Redirect ke halaman index.php

        }else{

            // Jika Gagal, Lakukan :

            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

            echo "<br><a href='edit-foto.php'>Kembali Ke Form</a>";

        }

    }else{

        // Jika gambar gagal diupload, Lakukan :

        echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 

                location = 'edit-foto.php'; 

                </script>";

    }

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :

    // Proses ubah data ke Database

    $query = "update user set username='$username' where userid='$userid' ";

    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query



    if($sql){ // Cek jika proses simpan ke database sukses atau tidak

        // Jika Sukses, Lakukan :

        header("location: edit-foto.php"); // Redirect ke halaman index.php

    }else{

        // Jika Gagal, Lakukan :

        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

        echo "<br><a href='edit-foto.php'>Kembali Ke Form</a>";

    }

}*/



?>

<?php
ini_set('display_error',1);
error_reporting(E_ALL);
include 'koneksi.php';
session_start();

   $fotoid = $_POST['fotoid'];
   $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $tanggalunggah = date("Y-m-d");
    $albumid = $_POST['albumid'];
    $userid = $_POST['userid'];

    $rand = rand();
    $ekstensi = array('png','jpg','jpeg');
    $filename = $_FILES['fotoid']['name'];
    $ukuran = $_FILES['fotoid']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $xx = $rand.'_'.$filename;
    $upload = move_uploaded_file($_FILES['fotoid']['tmp_name'],'img/'.$rand. '_'. $filename);
    mysqli_query($koneksi, "UPDATE `foto` SET `judulfoto`='$judulfoto',`deskripsifoto`='$deskripsifoto',`tanggalunggah`='$tanggalunggah',`albumid`='$albumid',`userid`='$userid',`xx`='$xx' WHERE `fotoid`='$fotoid'");
    header("location:edit-foto.php");
    
    if (!$upload) {
       print_r($_FILES['fotoid']['error']);
       header("location:edit-foto.php");
    }
    ?>
