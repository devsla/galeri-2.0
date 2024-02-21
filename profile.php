<?php include 'log-header.php'; ?> 
<body>
  

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
      <div class="fotoprofil">
      <img src="<?= $_SESSION['profile']; ?>" class="mx-auto" alt="gambar">
    </div>
        <p class="lead text-body-secondary"><?= $_SESSION['username']; ?></p>
        <p>
          <a href="#" class="btn btn-primary my-2  rounded-pill">share</a>
          <a href="#" class="btn btn-secondary my-2 rounded-pill"><i class="bi bi-pencil-square"></i>edit</a>
        </p>
      </div>
    </div>
    </div>
        <hr>
      </div>
    </div>
  </section>

</main>
<?php 

include 'koneksi.php';
$userid = $_SESSION['userid']; 
$sql="SELECT * FROM foto WHERE userid='$userid'";
$result = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($result) > 0) {
 while ($data = mysqli_fetch_assoc($result)) {
   
 ?>
<div class="container py-4">
    <div classh="row">
        <div class="col">
        <a href="foto.php?fotoid=<?= $data['fotoid']?>"><img src="img/<?= $data['lokasifile']; ?>" class="img-fluid" alt="..."></a>
        </div>
    </div>
</div>
   <?php }?>
   <?php }else{
    echo 'Anda belum mengunggah apapun';
    } ?>
    </body>