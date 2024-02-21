
<?php
	include ('koneksi.php');
	session_start();
		
	if (isset($_POST['like'])){		
		
		$id = $_POST['id'];
		$query=mysqli_query($koneksi,"select * from `likefoto` where fotoid='$id' and userid='".$_SESSION['userid']."'") or die(mysqli_error());
		
		if(mysqli_num_rows($query)>0){
			mysqli_query($koneksi,"delete from `likefoto` where userid='".$_SESSION['userid']."' and fotoid='$id'");
		}
		else{
			mysqli_query($koneksi,"insert into `likefoto` (userid,fotoid) values ('".$_SESSION['userid']."', '$id')");
		}
	}		
?>


