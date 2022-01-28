<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tabel pegawai</title>
</head>
<body>
 
<body style="background:black;">
 
 <div class="modal-dialog">
   <div class="modal-content">
	 <div class="modal-header bg-info">
	   <h5 class="modal-title">TABEL PEGAWAI</h5>
	  
	 </div>
	 <div class="modal-body"><br/>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Pegawai</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pegawai where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>golongan</td>
					<td><input type="number" name="golongan" value="<?php echo $d['golongan']; ?>"></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td><input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>