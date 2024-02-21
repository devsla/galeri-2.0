<?php include ('log-header.php');?>
<?php include ('koneksi.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome <?= $_SESSION['namalengkap'] ?></h1>
    <h2>post</h2>
    <?php
		$query=mysqli_query($koneksi,"select * from `foto`");
		while($row=mysqli_fetch_array($query)){
			?>
            <div class="post">
            <?php echo $row['deskripsifoto'] ?>
            </div>
            <div>
            <?php
							$query1=mysqli_query($koneksi,"select * from `likefoto` where fotoid='".$row['fotoid']."' and userid='".$_SESSION['userid']."'");
							if (mysqli_num_rows($query1)>0){
								?>
                                <button value="<?php echo $row['fotoid']; ?>" class="unlike">Unlike</button>
								<?php
							}
							else{
								?>
								<button value="<?php echo $row['fotoid']; ?>" class="like">Like</button>
								<?php
							}
						?>
					<span id="show_like<?php echo $row['fotoid']; ?>">
						<?php
							$query3=mysqli_query($koneksi,"select * from `likefoto` where fotoid='".$row['fotoid']."'");
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
					url: "like.php",
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
					url: "like.php",
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
</body>
</html>