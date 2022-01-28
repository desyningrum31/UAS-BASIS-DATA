<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];
 
// update data ke database
mysqli_query($koneksi,"update pegawai set nama='$nama', golongan='$golongan', jabatan='$jabatan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>