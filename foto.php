
<?php include 'log-header.php'; ?>

<?php
include 'koneksi.php';
$fotoid = $_GET['fotoid'];
$sql=mysqli_query($koneksi, "SELECT * FROM foto WHERE fotoid='$fotoid'");
 while ($data = mysqli_fetch_array($sql)) {
?>
<div class="container mt-3">
    
<div class="container">
    <div class="card">
      <div class="row">
        <div class="col-md-4">
          <img src="img/<?= $data['lokasifile']; ?>" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $data['judulfoto']; ?></h5>
            <p class="card-text"><?= $data['deskripsifoto']; ?></p>
            <div class="d-flex mb-3">
              <img src="<?= $_SESSION['profile'] ?>" class="img-fluid rounded-circle me-2" alt="Foto profil" style=" width: 30px;
          height: 30px; 
          border-radius: 50%;
          overflow: hidden;">
              <div>
                <p class="mb-0"><?= $_SESSION['username'] ?></p>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-light"><i class="bi bi-heart"></i> Suka</button>
              <a href="hapus-foto.php?fotoid=<?= $data['fotoid']; ?>" class="btn btn-danger my-2 rounded-pill" onclick="return confirm('apakah kamu ingin menghapus foto ini?');"><i class="bi bi-pencil-square"></i>hapus</a>
              <a href="edit-foto.php?fotoid=<?= $data['fotoid']; ?>" class="btn btn-secondary my-2 rounded-pill"><i class="bi bi-pencil-square"></i>edit</a>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>

  <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalChoice">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-body p-4 text-center">
        <h5 class="mb-0">Enable this setting?</h5>
        <p class="mb-0">You can always change your mind in your account settings.</p>
      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 border-end"><strong>Yes, enable</strong></button>
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0" data-bs-dismiss="modal">No thanks</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php include 'footer.php'; ?>

