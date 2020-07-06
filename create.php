<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];

$mysqli->query("INSERT INTO mahasiswa(nim,nama,jurusan,alamat,gambar) VALUES('$nim','$nama','$jurusan','$alamat','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $gambar);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php?page=read">';
exit;
