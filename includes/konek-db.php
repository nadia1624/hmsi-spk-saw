<?php 
$koneksi = mysqli_connect("localhost","root","","hmsi_saw");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
 