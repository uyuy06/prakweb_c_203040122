<?php
require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$buku = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Ubah Data buku</title>
</head>
<body>
    <h3>Form Ubah Data Buku</h3>
    <form action="" method="POST">
        <ul>
          <input type="hidden" name="id" value="<?= $buku['id']; ?>">
            <li>
                <label>
                  Nama Buku :
                  <input type="text" name="nama_buku" required value="<?= $buku['nama_buku']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Pengarang :
                  <input type="text" name="nama_pengarang" autofocus required value="<?= $buku['nama_pengarang']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Jumlah Lembar :
                  <input type="text" name="jumlah_lembar" required value="<?= $buku['jumlah_lembar']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Penerbit :
                  <input type="text" name="penerbit" required value="<?= $buku['penerbit']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Gambar :
                  <input type="text" name="gambar_buku" required value="<?= $buku['gambar_buku']; ?>">
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>