<?php
include "koneksi.php";
function antiinjection($data)
{
  global $mysqli;
  $filter_sql = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
  return $filter_sql;
}

$username = antiinjection($_POST['username']);
$password = antiinjection($_POST['password']);


$login = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0) {

  header('location:home.php');
} else {
  echo "<script>alert('Username Atau Password Yang Anda Masukan Salah'); window.location = 'index.php'</script>";
}
