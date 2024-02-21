
<?php include 'log-header.php'; ?>
<?php
include 'koneksi.php';
$sql=mysqli_query($koneksi, "SELECT fotoid,namalengkap,judulfoto,lokasifile FROM foto,user WHERE user.userid=foto.userid");
foreach($sql as $data):
?>
<div class="container py-4">
    <div class="row">
        <div class="col">
        <a href="detail-foto.php?fotoid=<?= $data['fotoid']?>"><img src="img/<?= $data['lokasifile'] ?>" class="img-fluid" alt="..."></a>
        </div>
    </div>
</div>
<?php endforeach ; ?>
<?php include 'footer.php';?>