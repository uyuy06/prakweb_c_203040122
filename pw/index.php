<?php  
require 'functions.php';

// query isi tabel
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<link rel="stylesheet" href="style.css">
</head>


<body class ="center" >
	<h3 >Daftar Buku</h3>

	<table border="1" cellpadding="10" cellspacing="0s">
		<tr>
			<th>Id</th>
			<th>Nama buku</th>
			<th>Pengarang</th>
			<th>Jumlah lembar</th>
            <th>Penerbit</th>
            <th>Gambar</th>
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
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>