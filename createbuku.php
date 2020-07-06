<?php
$kode = $_POST['kode'];
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$jenis_buku = $_POST['jenis_buku'];
$referensi = $_POST['referensi'];
$gambar = $_FILES['gambar']['name'];

mysqli_query($mysqli, "INSERT INTO buku(kode,judul_buku,penerbit,jenis_buku,referensi,gambar) VALUES('$kode','$judul_buku','$penerbit','$jenis_buku','$referensi','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $gambar);
// print_r($mysqli);
header('location:home.php?page=readbuku');
exit;
