
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
            <div>
            <?php
							$query1=mysqli_query($koneksi,"select * from `likefoto` where fotoid='".$data['fotoid']."' and userid='".$_SESSION['userid']."'");
							if (mysqli_num_rows($query1)>0){
								?>
                 <button value="<?php echo $data['fotoid']; ?>" class="unlike">Unlike</button>
								<?php
							}
							else{
								?>
								<button value="<?php echo $data['fotoid']; ?>" class="like">Like</button>
								<?php
							}
						?>
					<span id="show_like<?php echo $data['fotoid']; ?>">
						<?php
							$query3=mysqli_query($koneksi,"select * from `likefoto` where fotoid='".$data['fotoid']."'");
							echo mysqli_num_rows($query3);
						?>
					</span>
            </div>
         
            </div>
				</div><br>
			<?php
		}
	?>
</div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<script src = "jquery-3.1.1.js"></script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type = "text/javascript">
        $(document).ready(function(){
		$(document).on('click', '.like', function(){
			var id=$(this).val();
			var $this = $(this);
			$this.toggleClass('like');
          	if($this.hasClass('like')){
				$this.text('Like'); 
			} else {
				$this.text('Unlike');
				$this.addClass("unlike"); 
			}
				$.ajax({
					type: "POST",
					url: "suka.php",
					data: {
						id: id,
						like: 1,
					},
					success: function(){
						showLike(id);
					}
				});
		});
		
		$(document).on('click', '.unlike', function(){
			var id=$(this).val();
			var $this = $(this);
            $this.toggleClass('unlike');
 			if($this.hasClass('unlike')){
				$this.text('Unlike');
			} else {
				$this.text('Like');
				$this.addClass("like");
			}
				$.ajax({
					type: "POST",
					url: "suka.php",
					data: {
						id: id,
						like: 1,
					},
					success: function(){
						showLike(id);
					}
				});
		});
		
	});
	
	function showLike(id){
		$.ajax({
			url: 'show_like.php',
			type: 'POST',
			async: false,
			data:{
				id: id,
				showlike: 1
			},
			success: function(response){
				$('#show_like'+id).html(response);
				
			}
		});
	}
	
</script>
<?php include 'footer.php'; ?>

