<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];
 if (!empty($nama) || !empty($golongan) || !empty($jabatan)) {
// menginput data ke database
mysqli_query($koneksi,"insert into pegawai values('','$nama','$golongan','$jabatan')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>