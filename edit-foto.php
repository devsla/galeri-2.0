<?php include 'log-header.php';

	include 'koneksi.php';
    
	$fotoid = $_GET['fotoid'];
	$data = mysqli_query($koneksi,"select * from foto where fotoid='$fotoid'");
	while($d = mysqli_fetch_array($data)){
		?>
    <div class="container py-5">
        <div class="card">
            <div class="card-body">
                <form action="proses-edit.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="fotoid" class="form-label">fotoid</label>
                        <input type="text" class="form-control" id="fotoid" name="fotoid" value="<?= $d['fotoid'] ?>">
                        </div>
                <div class="mb-3">
                        <label for="userid" class="form-label">userid</label>
                        <input type="number" class="form-control" id="userid" name="userid" value="<?= $d['userid'] ?>">
                        </div>
                <div class="mb-3">
                        <label for="judulfoto" class="form-label">judulfoto</label>
                        <input type="text" class="form-control" id="judulfoto" name="judulfoto" value="<?= $d['judulfoto'] ?>">
                    </div>
                        <div class="mb-3">
                        <label for="deskripsifoto" class="form-label">deskripsifoto</label>
                        <input type="text" class="form-control" id="deskripsifoto" name="deskripsifoto"  value="<?= $d['deskripsifoto'] ?>">
                        </div>
                        <div class ="mb-3 col "> 
						<label>Foto</label>
						 <input type="file" name="fotoid" required="fotoid" class="form-control" accept="('.png','.jpg','.jpeg')"/>
					</div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="albumid"  value="<?= $d['albumid'] ?>">
                        <option selected>pilih album</option>
                        <?php 
                       include 'koneksi.php';
                         $sql=mysqli_query($koneksi, "SELECT * FROM album");
                         while ($d = mysqli_fetch_array($sql)) {
                        ?>
                        <option value="<?= $d['albumid'] ?>"><?= $d['namaalbum'] ?></option>
                        <?php } ?>
                        </select>
                         </div>
                         <div class="mb-3">
                         <select class="form-select" aria-label="Default select example" name="status"  value="<?= $d['status'] ?>">
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
<?php } ?>
<?php include 'footer.php'; ?>


<?php

   /* include 'koneksi.php';

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">

        <meta name="author" content="">

        <title>Form Edit</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>

    <body>

        <div class="container">

            <div class="row"> 

                <?php

                    $userid=$_GET['userid'];

                    $det=  mysqli_query($koneksi, "select * from user where userid='$userid'");

                    while($d=mysqli_fetch_array($det)){

                    ?>

                <div class="panel panel-primary">

                    <div class="panel-heading">

                        <span class="fa fa-user"> Edit User</span>

                    </div>

                    <!-- /.panel-heading -->

                    <div class="panel-body">

                        <form action="proses-edit.php" method="post" enctype="multipart/form-data">

                            <input name="id_user" type="hidden" class="form-control" value="<?php echo $d['userid'] ?>" required>

                            <div class="form-group">

                                <label>Username</label>

                                <input name="username" type="text" class="form-control" value="<?php echo $d['username'] ?>" required>

                            </div>

                            <div class="form-group">

                                <label>Foto</label><br>

                                <img src="foto/<?php echo $d['lokasifoto'] ?>" width="150px" height="120px" /></br>

                                <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>

                                <input name="gambar" id="gambar" type="file" class="form-control">

                            </div>

                            <input type="submit" class="btn btn-primary" value="Simpan">

                            <a href="index.php" class="btn btn-warning"> Kembali</a>

                        </form>

                        <?php 

                            }

                            ?>

                    </div>

                </div>

            </div>

        </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>

</html> */   

