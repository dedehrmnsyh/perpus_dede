<?php  

include '../../../config.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = mysqli_query($connection, "UPDATE peminjaman SET status=1 WHERE id='$id' ");

	if($query) {
		header("location:peminjamanBuku.php");
	} else {
		echo "error : " . mysqli_error($connection);
	}
}


?>