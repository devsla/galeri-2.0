<?php include 'log-header.php';?>
<div class="container py-5">
    <div class="row">
        <div class="col md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form action="proses-upload.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                        <label for="judulfoto" class="form-label">judulfoto</label>
                        <input type="text" class="form-control" id="judulfoto" name="judulfoto">
                        </div>
                        <div class="mb-3">
                        <label for="deskripsifoto" class="form-label">deskripsifoto</label>
                        <input type="text" class="form-control" id="deskripsifoto" name="deskripsifoto">
                        </div>
                        <div class ="mb-3 col "> 
						<label>Foto</label>
						 <input type="file" name="lokasifile" required="lokasifile" class="form-control" accept="('.png','.jpg','.jpeg')"/>
					</div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="albumid">
                        <option selected>pilih album</option>
                        <?php 
                         include 'koneksi.php';
                         $sql=mysqli_query($koneksi, "SELECT * FROM album");
                         while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <option value="<?= $data['albumid'] ?>"><?= $data['namaalbum'] ?></option>
                        <?php } ?>
                        </select>
                         </div>
                         <div class="mb-3">
                         <select class="form-select" aria-label="Default select example" name="status">
                        <option selected>Open this select menu</option>
                        <option value="public">public</option>
                        <option value="private">Private</option>
                        </select>
                         </div>
                        <div class="col-12">
                        <button class="btn btn-primary" type="submit" value="tambah">Button</button>
                         </div>
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
<?php 

?>