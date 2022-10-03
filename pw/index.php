<?php  
require 'functions.php';

// query isi tabel
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body class ="center" >
	<div class="container">
		<h3 >Daftar Buku</h3>
		<a href="tambah.php">Tambah Data Mahasiswa</a>
		<br><br>

		<form action="" method="post">
			<input type="text" name="keyword" size="30" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus>
			<button type="submit" name="cari">Cari!</button>
		</form>
		<br>

		<table border="1" cellpadding="10" cellspacing="0s">
			<tr>
				<th>Id</th>
				<th>Nama buku</th>
				<th>Pengarang</th>
				<th>Jumlah lembar</th>
				<th>Penerbit</th>
				<th>Gambar</th>
				<th>Opsi</th>
			</tr>
			<?php if(empty($buku)) : ?>
			<tr>
				<td colspan="4">
					<p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
				</td>
			</tr>
			<?php endif; ?>

			<?php $i = 1; 
			foreach($buku as $bk) : ?>
			<tr>
				<td><?= $i++; ?></td>
				<td><?= $bk['nama_buku']; ?></td>
				<td><?= $bk['nama_pengarang']; ?></td>
				<td><?= $bk['jumlah_lembar']; ?></td>
				<td><?= $bk['penerbit']; ?></td>
				<td><img src="assets/<?= $bk['gambar_buku']; ?>" width = "80"></td>
				<td>
				<a href="ubah.php?id=<?= $bk['id']; ?>">ubah</a>
			</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>