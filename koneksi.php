<?php 
$koneksi = mysqli_connect("localhost","root","","desy_puspita_ningrum");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>